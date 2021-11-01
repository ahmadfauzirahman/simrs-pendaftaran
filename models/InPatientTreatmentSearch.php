<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\InPatientTreatment;

/**
 * InPatientTreatmentSearch represents the model behind the search form of `app\models\InPatientTreatment`.
 */
class InPatientTreatmentSearch extends InPatientTreatment
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['registration_id', 'patient_id', 'folio_id', 'dept_id', 'unit_id', 'sub_unit_id', 'primary_dokter_id'], 'integer'],
            [['service_date', 'trans_date', 'created_time'], 'safe'],
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
        $query = InPatientTreatment::find();

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
            'registration_id' => $this->registration_id,
            'patient_id' => $this->patient_id,
            'folio_id' => $this->folio_id,
            'dept_id' => $this->dept_id,
            'unit_id' => $this->unit_id,
            'sub_unit_id' => $this->sub_unit_id,
            'primary_dokter_id' => $this->primary_dokter_id,
            'service_date' => $this->service_date,
            'trans_date' => $this->trans_date,
            'created_time' => $this->created_time,
        ]);

        return $dataProvider;
    }
}
