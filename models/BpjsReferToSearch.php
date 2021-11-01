<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\BpjsReferTo;

/**
 * BpjsReferToSearch represents the model behind the search form of `app\models\BpjsReferTo`.
 */
class BpjsReferToSearch extends BpjsReferTo
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['folio_id', 'patient_id', 'created_by', 'status'], 'integer'],
            [['refer_type', 'refer_service', 'refer_notes', 'refer_from_code', 'refer_from_name', 'refer_diag_code', 'refer_diag_name', 'refer_no', 'refer_date', 'refer_patient_insurance', 'refer_patient_cos', 'refer_patient_jenis_peserta', 'refer_patient_sex', 'refer_patient_name', 'refer_patient_card_no', 'refer_patient_medrec', 'refer_patient_birth_date', 'refer_to_code', 'refer_to_name', 'refer_to_clinic', 'refer_to_clinic_name', 'created_time'], 'safe'],
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
        $query = BpjsReferTo::find();

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
            'folio_id' => $this->folio_id,
            'patient_id' => $this->patient_id,
            'refer_date' => $this->refer_date,
            'refer_patient_birth_date' => $this->refer_patient_birth_date,
            'created_by' => $this->created_by,
            'created_time' => $this->created_time,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'refer_type', $this->refer_type])
            ->andFilterWhere(['like', 'refer_service', $this->refer_service])
            ->andFilterWhere(['like', 'refer_notes', $this->refer_notes])
            ->andFilterWhere(['like', 'refer_from_code', $this->refer_from_code])
            ->andFilterWhere(['like', 'refer_from_name', $this->refer_from_name])
            ->andFilterWhere(['like', 'refer_diag_code', $this->refer_diag_code])
            ->andFilterWhere(['like', 'refer_diag_name', $this->refer_diag_name])
            ->andFilterWhere(['like', 'refer_no', $this->refer_no])
            ->andFilterWhere(['like', 'refer_patient_insurance', $this->refer_patient_insurance])
            ->andFilterWhere(['like', 'refer_patient_cos', $this->refer_patient_cos])
            ->andFilterWhere(['like', 'refer_patient_jenis_peserta', $this->refer_patient_jenis_peserta])
            ->andFilterWhere(['like', 'refer_patient_sex', $this->refer_patient_sex])
            ->andFilterWhere(['like', 'refer_patient_name', $this->refer_patient_name])
            ->andFilterWhere(['like', 'refer_patient_card_no', $this->refer_patient_card_no])
            ->andFilterWhere(['like', 'refer_patient_medrec', $this->refer_patient_medrec])
            ->andFilterWhere(['like', 'refer_to_code', $this->refer_to_code])
            ->andFilterWhere(['like', 'refer_to_name', $this->refer_to_name])
            ->andFilterWhere(['like', 'refer_to_clinic', $this->refer_to_clinic])
            ->andFilterWhere(['like', 'refer_to_clinic_name', $this->refer_to_clinic_name]);

        return $dataProvider;
    }
}
