<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Patient;

/**
 * PatientSearch represents the model behind the search form of `app\models\Patient`.
 */
class PatientSearch extends Patient
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['patient_id', 'identity_id', 'blood_type_id', 'religion_id', 'patient_type_id', 'patient_group_id', 'marital_status_id', 'nationality_id', 'education_id', 'sex', 'created_user_id', 'modified_user_id', 'pay_by_id', 'excess_by_patient', 'contact_seq_pay', 'disabled', 'ethnicity_id', 'status_patient', 'bpjs_verified_by', 'ffs_aproval'], 'integer'],
            [['medrec_no', 'patient_name', 'salutation', 'alias', 'mother_maiden_name', 'address_line1', 'address_line2', 'identity_no', 'identity_expiry_date', 'member_card', 'member_card_exp', 'homephone', 'handphone', 'fax', 'email', 'place_of_birth', 'birth_date', 'registration_date', 'photo', 'notes', 'pay_id_card_no', 'created_time', 'modified_time', 'country', 'province', 'city', 'zipcode', 'district', 'subdistrict', 'village', 'rt', 'rw', 'id_address_line1', 'id_address_line2', 'id_city', 'id_zipcode', 'id_country', 'id_province', 'id_district', 'id_subdistrict', 'id_village', 'id_rt', 'id_rw', 'allergy', 'degenerative', 'chronic_disease', 'occupation', 'disabled_reason', 'storage_shelf_no', 'storage_remark', 'storage_last_access', 'storage_last_user', 'storage_content', 'storage_last_purged', 'bpjs_verified_time', 'bpjs_insurance_name', 'bpjs_insurance_no', 'bpjs_insurance_tat_date', 'bpjs_insurance_tmt_date', 'ffs_date', 'num_print_identity'], 'safe'],
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
        $query = Patient::find();

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
            'patient_id' => $this->patient_id,
            'identity_id' => $this->identity_id,
            'blood_type_id' => $this->blood_type_id,
            'religion_id' => $this->religion_id,
            'patient_type_id' => $this->patient_type_id,
            'patient_group_id' => $this->patient_group_id,
            'marital_status_id' => $this->marital_status_id,
            'nationality_id' => $this->nationality_id,
            'education_id' => $this->education_id,
            'identity_expiry_date' => $this->identity_expiry_date,
            'member_card_exp' => $this->member_card_exp,
            'birth_date' => $this->birth_date,
            'sex' => $this->sex,
            'registration_date' => $this->registration_date,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
            'modified_user_id' => $this->modified_user_id,
            'modified_time' => $this->modified_time,
            'pay_by_id' => $this->pay_by_id,
            'excess_by_patient' => $this->excess_by_patient,
            'contact_seq_pay' => $this->contact_seq_pay,
            'disabled' => $this->disabled,
            'storage_last_access' => $this->storage_last_access,
            'storage_last_purged' => $this->storage_last_purged,
            'ethnicity_id' => $this->ethnicity_id,
            'status_patient' => $this->status_patient,
            'bpjs_verified_by' => $this->bpjs_verified_by,
            'bpjs_verified_time' => $this->bpjs_verified_time,
            'bpjs_insurance_tat_date' => $this->bpjs_insurance_tat_date,
            'bpjs_insurance_tmt_date' => $this->bpjs_insurance_tmt_date,
            'ffs_aproval' => $this->ffs_aproval,
            'ffs_date' => $this->ffs_date,
        ]);

        $query->andFilterWhere(['like', 'medrec_no', $this->medrec_no])
            ->andFilterWhere(['like', 'patient_name', $this->patient_name])
            ->andFilterWhere(['like', 'salutation', $this->salutation])
            ->andFilterWhere(['like', 'alias', $this->alias])
            ->andFilterWhere(['like', 'mother_maiden_name', $this->mother_maiden_name])
            ->andFilterWhere(['like', 'address_line1', $this->address_line1])
            ->andFilterWhere(['like', 'address_line2', $this->address_line2])
            ->andFilterWhere(['like', 'identity_no', $this->identity_no])
            ->andFilterWhere(['like', 'member_card', $this->member_card])
            ->andFilterWhere(['like', 'homephone', $this->homephone])
            ->andFilterWhere(['like', 'handphone', $this->handphone])
            ->andFilterWhere(['like', 'fax', $this->fax])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'place_of_birth', $this->place_of_birth])
            ->andFilterWhere(['like', 'photo', $this->photo])
            ->andFilterWhere(['like', 'notes', $this->notes])
            ->andFilterWhere(['like', 'pay_id_card_no', $this->pay_id_card_no])
            ->andFilterWhere(['like', 'country', $this->country])
            ->andFilterWhere(['like', 'province', $this->province])
            ->andFilterWhere(['like', 'city', $this->city])
            ->andFilterWhere(['like', 'zipcode', $this->zipcode])
            ->andFilterWhere(['like', 'district', $this->district])
            ->andFilterWhere(['like', 'subdistrict', $this->subdistrict])
            ->andFilterWhere(['like', 'village', $this->village])
            ->andFilterWhere(['like', 'rt', $this->rt])
            ->andFilterWhere(['like', 'rw', $this->rw])
            ->andFilterWhere(['like', 'id_address_line1', $this->id_address_line1])
            ->andFilterWhere(['like', 'id_address_line2', $this->id_address_line2])
            ->andFilterWhere(['like', 'id_city', $this->id_city])
            ->andFilterWhere(['like', 'id_zipcode', $this->id_zipcode])
            ->andFilterWhere(['like', 'id_country', $this->id_country])
            ->andFilterWhere(['like', 'id_province', $this->id_province])
            ->andFilterWhere(['like', 'id_district', $this->id_district])
            ->andFilterWhere(['like', 'id_subdistrict', $this->id_subdistrict])
            ->andFilterWhere(['like', 'id_village', $this->id_village])
            ->andFilterWhere(['like', 'id_rt', $this->id_rt])
            ->andFilterWhere(['like', 'id_rw', $this->id_rw])
            ->andFilterWhere(['like', 'allergy', $this->allergy])
            ->andFilterWhere(['like', 'degenerative', $this->degenerative])
            ->andFilterWhere(['like', 'chronic_disease', $this->chronic_disease])
            ->andFilterWhere(['like', 'occupation', $this->occupation])
            ->andFilterWhere(['like', 'disabled_reason', $this->disabled_reason])
            ->andFilterWhere(['like', 'storage_shelf_no', $this->storage_shelf_no])
            ->andFilterWhere(['like', 'storage_remark', $this->storage_remark])
            ->andFilterWhere(['like', 'storage_last_user', $this->storage_last_user])
            ->andFilterWhere(['like', 'storage_content', $this->storage_content])
            ->andFilterWhere(['like', 'bpjs_insurance_name', $this->bpjs_insurance_name])
            ->andFilterWhere(['like', 'bpjs_insurance_no', $this->bpjs_insurance_no])
            ->andFilterWhere(['like', 'num_print_identity', $this->num_print_identity]);

        return $dataProvider;
    }
}
