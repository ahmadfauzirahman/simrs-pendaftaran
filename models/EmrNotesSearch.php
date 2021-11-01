<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\EmrNotes;

/**
 * EmrNotesSearch represents the model behind the search form of `app\models\EmrNotes`.
 */
class EmrNotesSearch extends EmrNotes
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['notes_id', 'notes_type'], 'integer'],
            [['notes_format_name', 'notes_format_descr'], 'safe'],
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
        $query = EmrNotes::find();

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
            'notes_id' => $this->notes_id,
            'notes_type' => $this->notes_type,
        ]);

        $query->andFilterWhere(['like', 'notes_format_name', $this->notes_format_name])
            ->andFilterWhere(['like', 'notes_format_descr', $this->notes_format_descr]);

        return $dataProvider;
    }
}
