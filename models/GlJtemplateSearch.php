<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\GlJtemplate;

/**
 * GlJtemplateSearch represents the model behind the search form of `app\models\GlJtemplate`.
 */
class GlJtemplateSearch extends GlJtemplate
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['jtemplate_id', 'journal_type_id', 'auto_recurring', 'created_user_id', 'modified_user_id'], 'integer'],
            [['template_name', 'description', 'created_time', 'modified_time'], 'safe'],
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
        $query = GlJtemplate::find();

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
            'jtemplate_id' => $this->jtemplate_id,
            'journal_type_id' => $this->journal_type_id,
            'auto_recurring' => $this->auto_recurring,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
            'modified_user_id' => $this->modified_user_id,
            'modified_time' => $this->modified_time,
        ]);

        $query->andFilterWhere(['like', 'template_name', $this->template_name])
            ->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }
}
