<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\EmrContent;

/**
 * EmrContentSearch represents the model behind the search form of `app\models\EmrContent`.
 */
class EmrContentSearch extends EmrContent
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['notes_content_type', 'notes_report_id'], 'integer'],
            [['notes_content_name', 'notes_functions', 'notes_content'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = EmrContent::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'notes_content_type' => $this->notes_content_type,
            'notes_report_id' => $this->notes_report_id,
        ]);

        $query->andFilterWhere(['like', 'notes_content_name', $this->notes_content_name])
            ->andFilterWhere(['like', 'notes_functions', $this->notes_functions])
            ->andFilterWhere(['like', 'notes_content', $this->notes_content]);

        return $dataProvider;
    }
}
