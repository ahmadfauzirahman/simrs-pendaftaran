<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SubUnit;

/**
 * SubUnitSearch represents the model behind the search form of `app\models\SubUnit`.
 */
class SubUnitSearch extends SubUnit
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sub_unit_id', 'update_status', 'duration', 'unlimited_time', 'unit_id', 'location_id', 'status', 'created_user_id', 'modified_user_id', 'patient_limit', 'total_patient_limit', 'max_patient_limit', 'overflow_slot', 'reservation_slot', 'warehouse_id', 'primary_doctor_id', 'secondary_doctor_id', 'refer_pharmacy', 'refer_other_exam', 'disabled', 'sex', 'lims_intf', 'n_day_rsvp_start', 'n_day_rsvp', 'rsvp_got_q_number', 'q_start', 'use_web_reservation', 'use_arm_reservation', 'reg_id', 'renpul', 'q_no', 'q_play', 'q_view', 'q_mark'], 'integer'],
            [['sub_unit_name', 'queue_prefix', 'floor_location', 'person_in_charge', 'phone', 'created_time', 'modified_time', 'notes', 'small_icon', 'large_icon', 'unavailable_from', 'unavailable_to', 'unavailable_message', 'refer_sub_unit_code', 'rsvp_start', 'rsvp_end', 'sub_unit_unavailable_url', 'sip_no', 'status_id', 'sensus_date', 'time', 'patient_booking', 'description', 'desc_ruangan', 'q_date'], 'safe'],
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
        $query = SubUnit::find();

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
            'update_status' => $this->update_status,
            'duration' => $this->duration,
            'unlimited_time' => $this->unlimited_time,
            'unit_id' => $this->unit_id,
            'location_id' => $this->location_id,
            'status' => $this->status,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
            'modified_user_id' => $this->modified_user_id,
            'modified_time' => $this->modified_time,
            'patient_limit' => $this->patient_limit,
            'total_patient_limit' => $this->total_patient_limit,
            'max_patient_limit' => $this->max_patient_limit,
            'overflow_slot' => $this->overflow_slot,
            'reservation_slot' => $this->reservation_slot,
            'warehouse_id' => $this->warehouse_id,
            'primary_doctor_id' => $this->primary_doctor_id,
            'secondary_doctor_id' => $this->secondary_doctor_id,
            'refer_pharmacy' => $this->refer_pharmacy,
            'refer_other_exam' => $this->refer_other_exam,
            'disabled' => $this->disabled,
            'sex' => $this->sex,
            'lims_intf' => $this->lims_intf,
            'unavailable_from' => $this->unavailable_from,
            'unavailable_to' => $this->unavailable_to,
            'n_day_rsvp_start' => $this->n_day_rsvp_start,
            'n_day_rsvp' => $this->n_day_rsvp,
            'rsvp_got_q_number' => $this->rsvp_got_q_number,
            'rsvp_start' => $this->rsvp_start,
            'rsvp_end' => $this->rsvp_end,
            'q_start' => $this->q_start,
            'use_web_reservation' => $this->use_web_reservation,
            'use_arm_reservation' => $this->use_arm_reservation,
            'reg_id' => $this->reg_id,
            'sensus_date' => $this->sensus_date,
            'time' => $this->time,
            'renpul' => $this->renpul,
            'q_no' => $this->q_no,
            'q_date' => $this->q_date,
            'q_play' => $this->q_play,
            'q_view' => $this->q_view,
            'q_mark' => $this->q_mark,
        ]);

        $query->andFilterWhere(['like', 'sub_unit_name', $this->sub_unit_name])
            ->andFilterWhere(['like', 'queue_prefix', $this->queue_prefix])
            ->andFilterWhere(['like', 'floor_location', $this->floor_location])
            ->andFilterWhere(['like', 'person_in_charge', $this->person_in_charge])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'notes', $this->notes])
            ->andFilterWhere(['like', 'small_icon', $this->small_icon])
            ->andFilterWhere(['like', 'large_icon', $this->large_icon])
            ->andFilterWhere(['like', 'unavailable_message', $this->unavailable_message])
            ->andFilterWhere(['like', 'refer_sub_unit_code', $this->refer_sub_unit_code])
            ->andFilterWhere(['like', 'sub_unit_unavailable_url', $this->sub_unit_unavailable_url])
            ->andFilterWhere(['like', 'sip_no', $this->sip_no])
            ->andFilterWhere(['like', 'status_id', $this->status_id])
            ->andFilterWhere(['like', 'patient_booking', $this->patient_booking])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'desc_ruangan', $this->desc_ruangan]);

        return $dataProvider;
    }
}
