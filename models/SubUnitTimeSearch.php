<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SubUnitTime;

/**
 * SubUnitTimeSearch represents the model behind the search form of `app\models\SubUnitTime`.
 */
class SubUnitTimeSearch extends SubUnitTime
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sub_unit_id', 'seq', 'dow', 'patient_limit', 'arm_patient_limit'], 'integer'],
            [['begin_time', 'end_time'], 'safe'],
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
        $query = SubUnitTime::find();

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
            'dow' => $this->dow,
            'begin_time' => $this->begin_time,
            'end_time' => $this->end_time,
            'patient_limit' => $this->patient_limit,
            'arm_patient_limit' => $this->arm_patient_limit,
        ]);

        return $dataProvider;
    }
}
