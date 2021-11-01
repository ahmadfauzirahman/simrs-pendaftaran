<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Folio;

/**
 * FolioSearch represents the model behind the search form of `app\models\Folio`.
 */
class FolioSearch extends Folio
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['folio_id', 'registration_id', 'dept_id', 'unit_id', 'sub_unit_id', 'cos_service_id', 'cos_requested_id', 'cos_pay_id', 'folio_status', 'parent_folio_id', 'medical_status', 'created_user_id', 'modified_user_id', 'pay_by_id', 'tax1_id', 'tax2_id', 'show_all_units', 'primary_doctor_id', 'secondary_doctor_id', 'show_available_day_only', 'view_day_week_month', 'overflow', 'refer_folio_id', 'validated', 'main_folio_id', 'bpjs_print_no', 'referral_print_no'], 'integer'],
            [['folio_no', 'folio_date', 'service_date', 'service_time', 'anamnesa', 'anamnesa_pic', 'prognosa', 'allergy', 'degenerative', 'notes', 'created_time', 'modified_time', 'diagnose', 'procedure_memo', 'end_service_date', 'end_service_time', 'view_from_date', 'cancellation_reason', 'physical_exam', 'other_exam_notes', 'q_number'], 'safe'],
            [['amount', 'amount_pmt', 'owing_self', 'self_amount', 'owing_pay_by', 'items_net_amount', 'disc_pc', 'pay_by_amount', 'disc_amount', 'tax1_rate', 'tax2_rate', 'tax1_amount', 'tax2_amount'], 'number'],
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
        $query = Folio::find();

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
            'folio_date' => $this->folio_date,
            'registration_id' => $this->registration_id,
            'dept_id' => $this->dept_id,
            'unit_id' => $this->unit_id,
            'sub_unit_id' => $this->sub_unit_id,
            'service_date' => $this->service_date,
            'service_time' => $this->service_time,
            'amount' => $this->amount,
            'amount_pmt' => $this->amount_pmt,
            'owing_self' => $this->owing_self,
            'self_amount' => $this->self_amount,
            'owing_pay_by' => $this->owing_pay_by,
            'items_net_amount' => $this->items_net_amount,
            'disc_pc' => $this->disc_pc,
            'pay_by_amount' => $this->pay_by_amount,
            'disc_amount' => $this->disc_amount,
            'cos_service_id' => $this->cos_service_id,
            'cos_requested_id' => $this->cos_requested_id,
            'cos_pay_id' => $this->cos_pay_id,
            'folio_status' => $this->folio_status,
            'parent_folio_id' => $this->parent_folio_id,
            'medical_status' => $this->medical_status,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
            'modified_user_id' => $this->modified_user_id,
            'modified_time' => $this->modified_time,
            'pay_by_id' => $this->pay_by_id,
            'tax1_id' => $this->tax1_id,
            'tax2_id' => $this->tax2_id,
            'tax1_rate' => $this->tax1_rate,
            'tax2_rate' => $this->tax2_rate,
            'tax1_amount' => $this->tax1_amount,
            'tax2_amount' => $this->tax2_amount,
            'show_all_units' => $this->show_all_units,
            'primary_doctor_id' => $this->primary_doctor_id,
            'secondary_doctor_id' => $this->secondary_doctor_id,
            'end_service_date' => $this->end_service_date,
            'end_service_time' => $this->end_service_time,
            'view_from_date' => $this->view_from_date,
            'show_available_day_only' => $this->show_available_day_only,
            'view_day_week_month' => $this->view_day_week_month,
            'overflow' => $this->overflow,
            'refer_folio_id' => $this->refer_folio_id,
            'validated' => $this->validated,
            'main_folio_id' => $this->main_folio_id,
            'bpjs_print_no' => $this->bpjs_print_no,
            'referral_print_no' => $this->referral_print_no,
        ]);

        $query->andFilterWhere(['like', 'folio_no', $this->folio_no])
            ->andFilterWhere(['like', 'anamnesa', $this->anamnesa])
            ->andFilterWhere(['like', 'anamnesa_pic', $this->anamnesa_pic])
            ->andFilterWhere(['like', 'prognosa', $this->prognosa])
            ->andFilterWhere(['like', 'allergy', $this->allergy])
            ->andFilterWhere(['like', 'degenerative', $this->degenerative])
            ->andFilterWhere(['like', 'notes', $this->notes])
            ->andFilterWhere(['like', 'diagnose', $this->diagnose])
            ->andFilterWhere(['like', 'procedure_memo', $this->procedure_memo])
            ->andFilterWhere(['like', 'cancellation_reason', $this->cancellation_reason])
            ->andFilterWhere(['like', 'physical_exam', $this->physical_exam])
            ->andFilterWhere(['like', 'other_exam_notes', $this->other_exam_notes])
            ->andFilterWhere(['like', 'q_number', $this->q_number]);

        return $dataProvider;
    }
}
