<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\NumExt;

/**
 * NumExtSearch represents the model behind the search form of `app\models\NumExt`.
 */
class NumExtSearch extends NumExt
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['numbering_id', 'min_number', 'max_number', 'next_number', 'num_year', 'num_month', 'created_user_id'], 'integer'],
            [['numbering_name', 'format', 'created_time'], 'safe'],
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
        $query = NumExt::find();

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
            'numbering_id' => $this->numbering_id,
            'min_number' => $this->min_number,
            'max_number' => $this->max_number,
            'next_number' => $this->next_number,
            'num_year' => $this->num_year,
            'num_month' => $this->num_month,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
        ]);

        $query->andFilterWhere(['like', 'numbering_name', $this->numbering_name])
            ->andFilterWhere(['like', 'format', $this->format]);

        return $dataProvider;
    }
}