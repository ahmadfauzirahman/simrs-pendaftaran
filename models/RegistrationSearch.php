<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Registration;

/**
 * RegistrationSearch represents the model behind the search form of `app\models\Registration`.
 */
class RegistrationSearch extends Registration
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['registration_id', 'patient_id', 'pay_by_id', 'contact_seq_pay', 'status', 'first_folio_id', 'refer_from_cause', 'created_user_id', 'modified_user_id', 'excess_by_patient', 'ref_type_id', 'main_folio_id', 'dept_id', 'status_id', 'status_patient', 'bpjs_verified_by', 'reg_bpjs_verified_by', 'reg_bpjs_discharge_by', 'apotik_id', 'new_reg', 'main_dept_id', 'aproval_ffs_is', 'episode'], 'integer'],
            [['registration_no', 'registration_date', 'refer_no', 'refer_from_no', 'refer_from_date', 'refer_from_doctor', 'refer_from_hospital', 'refer_from_diagnose_code', 'refer_from_diagnose', 'notes', 'created_time', 'modified_time', 'q_number', 'reservation_date', 'bpjs_verfied_time', 'reg_bpjs_verified_time', 'reg_bpjs_discharge_time', 'reg_bpjs_discharge_notes', 'reg_end_date', 'sep_no', 'ffs_date'], 'safe'],
            [['pay_by_amount', 'self_amount', 'amount', 'owing_pay_by', 'owing_self'], 'number'],
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
        $query = Registration::find();

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
            'registration_date' => $this->registration_date,
            'pay_by_id' => $this->pay_by_id,
            'contact_seq_pay' => $this->contact_seq_pay,
            'status' => $this->status,
            'pay_by_amount' => $this->pay_by_amount,
            'self_amount' => $this->self_amount,
            'amount' => $this->amount,
            'owing_pay_by' => $this->owing_pay_by,
            'owing_self' => $this->owing_self,
            'first_folio_id' => $this->first_folio_id,
            'refer_from_date' => $this->refer_from_date,
            'refer_from_cause' => $this->refer_from_cause,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
            'modified_user_id' => $this->modified_user_id,
            'modified_time' => $this->modified_time,
            'excess_by_patient' => $this->excess_by_patient,
            'ref_type_id' => $this->ref_type_id,
            'reservation_date' => $this->reservation_date,
            'main_folio_id' => $this->main_folio_id,
            'dept_id' => $this->dept_id,
            'status_id' => $this->status_id,
            'status_patient' => $this->status_patient,
            'bpjs_verified_by' => $this->bpjs_verified_by,
            'bpjs_verfied_time' => $this->bpjs_verfied_time,
            'reg_bpjs_verified_by' => $this->reg_bpjs_verified_by,
            'reg_bpjs_verified_time' => $this->reg_bpjs_verified_time,
            'reg_bpjs_discharge_by' => $this->reg_bpjs_discharge_by,
            'reg_bpjs_discharge_time' => $this->reg_bpjs_discharge_time,
            'apotik_id' => $this->apotik_id,
            'reg_end_date' => $this->reg_end_date,
            'new_reg' => $this->new_reg,
            'main_dept_id' => $this->main_dept_id,
            'aproval_ffs_is' => $this->aproval_ffs_is,
            'episode' => $this->episode,
            'ffs_date' => $this->ffs_date,
        ]);

        $query->andFilterWhere(['like', 'registration_no', $this->registration_no])
            ->andFilterWhere(['like', 'refer_no', $this->refer_no])
            ->andFilterWhere(['like', 'refer_from_no', $this->refer_from_no])
            ->andFilterWhere(['like', 'refer_from_doctor', $this->refer_from_doctor])
            ->andFilterWhere(['like', 'refer_from_hospital', $this->refer_from_hospital])
            ->andFilterWhere(['like', 'refer_from_diagnose_code', $this->refer_from_diagnose_code])
            ->andFilterWhere(['like', 'refer_from_diagnose', $this->refer_from_diagnose])
            ->andFilterWhere(['like', 'notes', $this->notes])
            ->andFilterWhere(['like', 'q_number', $this->q_number])
            ->andFilterWhere(['like', 'reg_bpjs_discharge_notes', $this->reg_bpjs_discharge_notes])
            ->andFilterWhere(['like', 'sep_no', $this->sep_no]);

        return $dataProvider;
    }
}
