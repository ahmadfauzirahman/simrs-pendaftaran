<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\CountForBor;

/**
 * CountForBorSearch represents the model behind the search form of `app\models\CountForBor`.
 */
class CountForBorSearch extends CountForBor
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['progress_date'], 'safe'],
            [['total_of_patient', 'total_of_bed'], 'integer'],
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
        $query = CountForBor::find();

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
            'progress_date' => $this->progress_date,
            'total_of_patient' => $this->total_of_patient,
            'total_of_bed' => $this->total_of_bed,
        ]);

        return $dataProvider;
    }
}
