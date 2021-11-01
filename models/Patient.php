<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "patient".
 *
 * @property int $patient_id
 * @property string $medrec_no
 * @property string $patient_name
 * @property string|null $salutation
 * @property string|null $alias
 * @property string|null $mother_maiden_name
 * @property string|null $address_line1
 * @property string|null $address_line2
 * @property int|null $identity_id
 * @property int|null $blood_type_id
 * @property int|null $religion_id
 * @property int|null $patient_type_id
 * @property int|null $patient_group_id
 * @property int|null $marital_status_id
 * @property int|null $nationality_id
 * @property int|null $education_id
 * @property string|null $identity_no
 * @property string|null $identity_expiry_date
 * @property string|null $member_card
 * @property string|null $member_card_exp
 * @property string|null $homephone
 * @property string|null $handphone
 * @property string|null $fax
 * @property string|null $email
 * @property string|null $place_of_birth
 * @property string|null $birth_date
 * @property int|null $sex
 * @property string|null $registration_date
 * @property resource|null $photo
 * @property string|null $notes
 * @property string|null $pay_id_card_no
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 * @property string|null $country
 * @property string|null $province
 * @property string|null $city
 * @property string|null $zipcode
 * @property string|null $district
 * @property string|null $subdistrict
 * @property string|null $village
 * @property string|null $rt
 * @property string|null $rw
 * @property string|null $id_address_line1
 * @property string|null $id_address_line2
 * @property string|null $id_city
 * @property string|null $id_zipcode
 * @property string|null $id_country
 * @property string|null $id_province
 * @property string|null $id_district
 * @property string|null $id_subdistrict
 * @property string|null $id_village
 * @property string|null $id_rt
 * @property string|null $id_rw
 * @property int|null $pay_by_id
 * @property string|null $allergy
 * @property string|null $degenerative
 * @property string|null $chronic_disease
 * @property string|null $occupation
 * @property int|null $excess_by_patient
 * @property int|null $contact_seq_pay
 * @property int|null $disabled
 * @property string|null $disabled_reason
 * @property string|null $storage_shelf_no
 * @property string|null $storage_remark
 * @property string|null $storage_last_access
 * @property string|null $storage_last_user
 * @property string|null $storage_content
 * @property string|null $storage_last_purged
 * @property int|null $ethnicity_id
 * @property int|null $status_patient
 * @property int|null $bpjs_verified_by
 * @property string|null $bpjs_verified_time
 * @property string|null $bpjs_insurance_name
 * @property string|null $bpjs_insurance_no
 * @property string|null $bpjs_insurance_tat_date
 * @property string|null $bpjs_insurance_tmt_date
 * @property int|null $ffs_aproval
 * @property string|null $ffs_date
 * @property string|null $num_print_identity
 *
 * @property DownPayment[] $downPayments
 * @property MarketingCardPatientExt[] $marketingCardPatientExts
 * @property MarketingCardExt[] $cards
 * @property OkupasiFileXt[] $okupasiFileXts
 * @property PayBy $payBy
 * @property BloodType $bloodType
 * @property Religion $religion
 * @property PatientType $patientType
 * @property Identity $identity
 * @property Nationality $nationality
 * @property ScrtUser $createdUser
 * @property ScrtUser $modifiedUser
 * @property MaritalStatus $maritalStatus
 * @property PatientGroup $patientGroup
 * @property PatientAllergy[] $patientAllergies
 * @property PatientAtt[] $patientAtts
 * @property PatientContact[] $patientContacts
 * @property PatientContact[] $patientContacts0
 * @property PatientDeg[] $patientDegs
 * @property PatientDisease[] $patientDiseases
 * @property Registration[] $registrations
 * @property RegistrationFill[] $registrationFills
 */
class Patient extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'patient';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['patient_id', 'medrec_no', 'patient_name'], 'required'],
            [['patient_id', 'identity_id', 'blood_type_id', 'religion_id', 'patient_type_id', 'patient_group_id', 'marital_status_id', 'nationality_id', 'education_id', 'sex', 'created_user_id', 'modified_user_id', 'pay_by_id', 'excess_by_patient', 'contact_seq_pay', 'disabled', 'ethnicity_id', 'status_patient', 'bpjs_verified_by', 'ffs_aproval'], 'integer'],
            [['identity_expiry_date', 'member_card_exp', 'birth_date', 'registration_date', 'created_time', 'modified_time', 'storage_last_access', 'storage_last_purged', 'bpjs_verified_time', 'bpjs_insurance_tat_date', 'bpjs_insurance_tmt_date', 'ffs_date'], 'safe'],
            [['photo', 'notes', 'allergy', 'degenerative', 'chronic_disease'], 'string'],
            [['medrec_no', 'alias', 'identity_no', 'member_card', 'pay_id_card_no', 'country', 'province', 'city', 'id_country', 'id_province', 'occupation'], 'string', 'max' => 20],
            [['patient_name', 'mother_maiden_name', 'address_line1', 'address_line2', 'email', 'district', 'subdistrict', 'village', 'id_address_line1', 'id_address_line2', 'id_district', 'id_subdistrict', 'id_village', 'disabled_reason', 'storage_content', 'bpjs_insurance_no'], 'string', 'max' => 50],
            [['salutation', 'storage_shelf_no', 'num_print_identity'], 'string', 'max' => 10],
            [['homephone', 'handphone', 'fax', 'place_of_birth', 'id_city'], 'string', 'max' => 30],
            [['zipcode', 'id_zipcode'], 'string', 'max' => 5],
            [['rt', 'rw', 'id_rt', 'id_rw'], 'string', 'max' => 3],
            [['storage_remark'], 'string', 'max' => 150],
            [['storage_last_user'], 'string', 'max' => 25],
            [['bpjs_insurance_name'], 'string', 'max' => 100],
            [['medrec_no'], 'unique'],
            [['patient_id'], 'unique'],
            [['pay_by_id'], 'exist', 'skipOnError' => true, 'targetClass' => PayBy::className(), 'targetAttribute' => ['pay_by_id' => 'pay_by_id']],
            [['blood_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => BloodType::className(), 'targetAttribute' => ['blood_type_id' => 'blood_type_id']],
            [['religion_id'], 'exist', 'skipOnError' => true, 'targetClass' => Religion::className(), 'targetAttribute' => ['religion_id' => 'religion_id']],
            [['patient_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => PatientType::className(), 'targetAttribute' => ['patient_type_id' => 'patient_type_id']],
            [['identity_id'], 'exist', 'skipOnError' => true, 'targetClass' => Identity::className(), 'targetAttribute' => ['identity_id' => 'identity_id']],
            [['nationality_id'], 'exist', 'skipOnError' => true, 'targetClass' => Nationality::className(), 'targetAttribute' => ['nationality_id' => 'nationality_id']],
            [['created_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['created_user_id' => 'user_id']],
            [['modified_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['modified_user_id' => 'user_id']],
            [['marital_status_id'], 'exist', 'skipOnError' => true, 'targetClass' => MaritalStatus::className(), 'targetAttribute' => ['marital_status_id' => 'marital_status_id']],
            [['patient_group_id'], 'exist', 'skipOnError' => true, 'targetClass' => PatientGroup::className(), 'targetAttribute' => ['patient_group_id' => 'patient_group_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'patient_id' => 'Patient ID',
            'medrec_no' => 'Medrec No',
            'patient_name' => 'Patient Name',
            'salutation' => 'Salutation',
            'alias' => 'Alias',
            'mother_maiden_name' => 'Mother Maiden Name',
            'address_line1' => 'Address Line1',
            'address_line2' => 'Address Line2',
            'identity_id' => 'Identity ID',
            'blood_type_id' => 'Blood Type ID',
            'religion_id' => 'Religion ID',
            'patient_type_id' => 'Patient Type ID',
            'patient_group_id' => 'Patient Group ID',
            'marital_status_id' => 'Marital Status ID',
            'nationality_id' => 'Nationality ID',
            'education_id' => 'Education ID',
            'identity_no' => 'Identity No',
            'identity_expiry_date' => 'Identity Expiry Date',
            'member_card' => 'Member Card',
            'member_card_exp' => 'Member Card Exp',
            'homephone' => 'Homephone',
            'handphone' => 'Handphone',
            'fax' => 'Fax',
            'email' => 'Email',
            'place_of_birth' => 'Place Of Birth',
            'birth_date' => 'Birth Date',
            'sex' => 'Sex',
            'registration_date' => 'Registration Date',
            'photo' => 'Photo',
            'notes' => 'Notes',
            'pay_id_card_no' => 'Pay Id Card No',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
            'country' => 'Country',
            'province' => 'Province',
            'city' => 'City',
            'zipcode' => 'Zipcode',
            'district' => 'District',
            'subdistrict' => 'Subdistrict',
            'village' => 'Village',
            'rt' => 'Rt',
            'rw' => 'Rw',
            'id_address_line1' => 'Id Address Line1',
            'id_address_line2' => 'Id Address Line2',
            'id_city' => 'Id City',
            'id_zipcode' => 'Id Zipcode',
            'id_country' => 'Id Country',
            'id_province' => 'Id Province',
            'id_district' => 'Id District',
            'id_subdistrict' => 'Id Subdistrict',
            'id_village' => 'Id Village',
            'id_rt' => 'Id Rt',
            'id_rw' => 'Id Rw',
            'pay_by_id' => 'Pay By ID',
            'allergy' => 'Allergy',
            'degenerative' => 'Degenerative',
            'chronic_disease' => 'Chronic Disease',
            'occupation' => 'Occupation',
            'excess_by_patient' => 'Excess By Patient',
            'contact_seq_pay' => 'Contact Seq Pay',
            'disabled' => 'Disabled',
            'disabled_reason' => 'Disabled Reason',
            'storage_shelf_no' => 'Storage Shelf No',
            'storage_remark' => 'Storage Remark',
            'storage_last_access' => 'Storage Last Access',
            'storage_last_user' => 'Storage Last User',
            'storage_content' => 'Storage Content',
            'storage_last_purged' => 'Storage Last Purged',
            'ethnicity_id' => 'Ethnicity ID',
            'status_patient' => 'Status Patient',
            'bpjs_verified_by' => 'Bpjs Verified By',
            'bpjs_verified_time' => 'Bpjs Verified Time',
            'bpjs_insurance_name' => 'Bpjs Insurance Name',
            'bpjs_insurance_no' => 'Bpjs Insurance No',
            'bpjs_insurance_tat_date' => 'Bpjs Insurance Tat Date',
            'bpjs_insurance_tmt_date' => 'Bpjs Insurance Tmt Date',
            'ffs_aproval' => 'Ffs Aproval',
            'ffs_date' => 'Ffs Date',
            'num_print_identity' => 'Num Print Identity',
        ];
    }

    /**
     * Gets query for [[DownPayments]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDownPayments()
    {
        return $this->hasMany(DownPayment::className(), ['patient_id' => 'patient_id']);
    }

    /**
     * Gets query for [[MarketingCardPatientExts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMarketingCardPatientExts()
    {
        return $this->hasMany(MarketingCardPatientExt::className(), ['patient_id' => 'patient_id']);
    }

    /**
     * Gets query for [[Cards]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCards()
    {
        return $this->hasMany(MarketingCardExt::className(), ['card_id' => 'card_id'])->viaTable('marketing_card_patient_ext', ['patient_id' => 'patient_id']);
    }

    /**
     * Gets query for [[OkupasiFileXts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOkupasiFileXts()
    {
        return $this->hasMany(OkupasiFileXt::className(), ['patient_id' => 'patient_id']);
    }

    /**
     * Gets query for [[PayBy]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPayBy()
    {
        return $this->hasOne(PayBy::className(), ['pay_by_id' => 'pay_by_id']);
    }

    /**
     * Gets query for [[BloodType]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBloodType()
    {
        return $this->hasOne(BloodType::className(), ['blood_type_id' => 'blood_type_id']);
    }

    /**
     * Gets query for [[Religion]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReligion()
    {
        return $this->hasOne(Religion::className(), ['religion_id' => 'religion_id']);
    }

    /**
     * Gets query for [[PatientType]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPatientType()
    {
        return $this->hasOne(PatientType::className(), ['patient_type_id' => 'patient_type_id']);
    }

    /**
     * Gets query for [[Identity]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdentity()
    {
        return $this->hasOne(Identity::className(), ['identity_id' => 'identity_id']);
    }

    /**
     * Gets query for [[Nationality]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNationality()
    {
        return $this->hasOne(Nationality::className(), ['nationality_id' => 'nationality_id']);
    }

    /**
     * Gets query for [[CreatedUser]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedUser()
    {
        return $this->hasOne(ScrtUser::className(), ['user_id' => 'created_user_id']);
    }

    /**
     * Gets query for [[ModifiedUser]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getModifiedUser()
    {
        return $this->hasOne(ScrtUser::className(), ['user_id' => 'modified_user_id']);
    }

    /**
     * Gets query for [[MaritalStatus]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMaritalStatus()
    {
        return $this->hasOne(MaritalStatus::className(), ['marital_status_id' => 'marital_status_id']);
    }

    /**
     * Gets query for [[PatientGroup]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPatientGroup()
    {
        return $this->hasOne(PatientGroup::className(), ['patient_group_id' => 'patient_group_id']);
    }

    /**
     * Gets query for [[PatientAllergies]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPatientAllergies()
    {
        return $this->hasMany(PatientAllergy::className(), ['patient_id' => 'patient_id']);
    }

    /**
     * Gets query for [[PatientAtts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPatientAtts()
    {
        return $this->hasMany(PatientAtt::className(), ['patient_id' => 'patient_id']);
    }

    /**
     * Gets query for [[PatientContacts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPatientContacts()
    {
        return $this->hasMany(PatientContact::className(), ['relative_patient_id' => 'patient_id']);
    }

    /**
     * Gets query for [[PatientContacts0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPatientContacts0()
    {
        return $this->hasMany(PatientContact::className(), ['patient_id' => 'patient_id']);
    }

    /**
     * Gets query for [[PatientDegs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPatientDegs()
    {
        return $this->hasMany(PatientDeg::className(), ['patient_id' => 'patient_id']);
    }

    /**
     * Gets query for [[PatientDiseases]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPatientDiseases()
    {
        return $this->hasMany(PatientDisease::className(), ['patient_id' => 'patient_id']);
    }

    /**
     * Gets query for [[Registrations]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRegistrations()
    {
        return $this->hasMany(Registration::className(), ['patient_id' => 'patient_id']);
    }

    /**
     * Gets query for [[RegistrationFills]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRegistrationFills()
    {
        return $this->hasMany(RegistrationFill::className(), ['patient_id' => 'patient_id']);
    }
}
