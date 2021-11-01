<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SubUnitTimeByDate;

/**
 * SubUnitTimeByDateSearch represents the model behind the search form of `app\models\SubUnitTimeByDate`.
 */
class SubUnitTimeByDateSearch extends SubUnitTimeByDate
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sub_unit_id', 'seq', 'patient_limit', 'arm_patient_limit'], 'integer'],
            [['at_date', 'begin_time', 'end_time'], 'safe'],
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
        $query = SubUnitTimeByDate::find();

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
            'sub_unit_id' => $this->sub_unit_id,
            'seq' => $this->seq,
            'at_date' => $this->at_date,
            'begin_time' => $this->begin_time,
            'end_time' => $this->end_time,
            'patient_limit' => $this->patient_limit,
            'arm_patient_limit' => $this->arm_patient_limit,
        ]);

        return $dataProvider;
    }
}