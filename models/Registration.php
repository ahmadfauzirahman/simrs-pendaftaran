<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "registration".
 *
 * @property int $registration_id
 * @property int|null $patient_id
 * @property string|null $registration_no
 * @property string|null $registration_date
 * @property int|null $pay_by_id
 * @property int|null $contact_seq_pay
 * @property int|null $status
 * @property float|null $pay_by_amount
 * @property float|null $self_amount
 * @property float|null $amount
 * @property float|null $owing_pay_by
 * @property float|null $owing_self
 * @property int|null $first_folio_id
 * @property string|null $refer_no
 * @property string|null $refer_from_no
 * @property string|null $refer_from_date
 * @property string|null $refer_from_doctor
 * @property string|null $refer_from_hospital
 * @property string|null $refer_from_diagnose_code
 * @property string|null $refer_from_diagnose
 * @property int|null $refer_from_cause
 * @property string|null $notes
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 * @property int|null $excess_by_patient
 * @property int|null $ref_type_id
 * @property string|null $q_number
 * @property string|null $reservation_date
 * @property int|null $main_folio_id
 * @property int|null $dept_id
 * @property int|null $status_id
 * @property int|null $status_patient
 * @property int|null $bpjs_verified_by
 * @property string|null $bpjs_verfied_time
 * @property int|null $reg_bpjs_verified_by
 * @property string|null $reg_bpjs_verified_time
 * @property int|null $reg_bpjs_discharge_by
 * @property string|null $reg_bpjs_discharge_time
 * @property string|null $reg_bpjs_discharge_notes
 * @property int|null $apotik_id
 * @property string|null $reg_end_date
 * @property int|null $new_reg
 * @property int|null $main_dept_id
 * @property int|null $aproval_ffs_is
 * @property string|null $sep_no
 * @property int|null $episode
 * @property string|null $ffs_date
 *
 * @property BillingPmt[] $billingPmts
 * @property CompleteFileExt $completeFileExt
 * @property CompleteFileHdXt $completeFileHdXt
 * @property FeeAmbulanceDat[] $feeAmbulanceDats
 * @property Folio[] $folios
 * @property InformasiNotesExtDet[] $informasiNotesExtDets
 * @property OkupasiXt[] $okupasiXts
 * @property RegApmXt $regApmXt
 * @property RegDiagExt[] $regDiagExts
 * @property RegOnlineXt $regOnlineXt
 * @property RegOpExt[] $regOpExts
 * @property RegWaSendXt $regWaSendXt
 * @property Patient $patient
 * @property PayBy $payBy
 * @property ScrtUser $createdUser
 * @property ScrtUser $modifiedUser
 * @property ReferenceType $refType
 * @property ResponeTimePoliXt[] $responeTimePoliXts
 * @property ResponetimeChasierExt $responetimeChasierExt
 * @property SubUnit[] $subUnits
 * @property Surgery $surgery
 * @property ValueEditFarmasiExt $valueEditFarmasiExt
 * @property XapprovalObillXt[] $xapprovalObillXts
 */
class Registration extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'registration';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['registration_id'], 'required'],
            [['registration_id', 'patient_id', 'pay_by_id', 'contact_seq_pay', 'status', 'first_folio_id', 'refer_from_cause', 'created_user_id', 'modified_user_id', 'excess_by_patient', 'ref_type_id', 'main_folio_id', 'dept_id', 'status_id', 'status_patient', 'bpjs_verified_by', 'reg_bpjs_verified_by', 'reg_bpjs_discharge_by', 'apotik_id', 'new_reg', 'main_dept_id', 'aproval_ffs_is', 'episode'], 'integer'],
            [['registration_date', 'refer_from_date', 'created_time', 'modified_time', 'reservation_date', 'bpjs_verfied_time', 'reg_bpjs_verified_time', 'reg_bpjs_discharge_time', 'reg_end_date', 'ffs_date'], 'safe'],
            [['pay_by_amount', 'self_amount', 'amount', 'owing_pay_by', 'owing_self'], 'number'],
            [['refer_from_diagnose', 'notes'], 'string'],
            [['registration_no'], 'string', 'max' => 20],
            [['refer_no', 'refer_from_no', 'refer_from_doctor', 'refer_from_hospital', 'refer_from_diagnose_code', 'reg_bpjs_discharge_notes'], 'string', 'max' => 50],
            [['q_number'], 'string', 'max' => 10],
            [['sep_no'], 'string', 'max' => 25],
            [['registration_id'], 'unique'],
            [['patient_id'], 'exist', 'skipOnError' => true, 'targetClass' => Patient::className(), 'targetAttribute' => ['patient_id' => 'patient_id']],
            [['pay_by_id'], 'exist', 'skipOnError' => true, 'targetClass' => PayBy::className(), 'targetAttribute' => ['pay_by_id' => 'pay_by_id']],
            [['created_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['created_user_id' => 'user_id']],
            [['modified_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['modified_user_id' => 'user_id']],
            [['ref_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => ReferenceType::className(), 'targetAttribute' => ['ref_type_id' => 'ref_type_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'registration_id' => 'Registration ID',
            'patient_id' => 'Patient ID',
            'registration_no' => 'Registration No',
            'registration_date' => 'Registration Date',
            'pay_by_id' => 'Pay By ID',
            'contact_seq_pay' => 'Contact Seq Pay',
            'status' => 'Status',
            'pay_by_amount' => 'Pay By Amount',
            'self_amount' => 'Self Amount',
            'amount' => 'Amount',
            'owing_pay_by' => 'Owing Pay By',
            'owing_self' => 'Owing Self',
            'first_folio_id' => 'First Folio ID',
            'refer_no' => 'Refer No',
            'refer_from_no' => 'Refer From No',
            'refer_from_date' => 'Refer From Date',
            'refer_from_doctor' => 'Refer From Doctor',
            'refer_from_hospital' => 'Refer From Hospital',
            'refer_from_diagnose_code' => 'Refer From Diagnose Code',
            'refer_from_diagnose' => 'Refer From Diagnose',
            'refer_from_cause' => 'Refer From Cause',
            'notes' => 'Notes',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
            'excess_by_patient' => 'Excess By Patient',
            'ref_type_id' => 'Ref Type ID',
            'q_number' => 'Q Number',
            'reservation_date' => 'Reservation Date',
            'main_folio_id' => 'Main Folio ID',
            'dept_id' => 'Dept ID',
            'status_id' => 'Status ID',
            'status_patient' => 'Status Patient',
            'bpjs_verified_by' => 'Bpjs Verified By',
            'bpjs_verfied_time' => 'Bpjs Verfied Time',
            'reg_bpjs_verified_by' => 'Reg Bpjs Verified By',
            'reg_bpjs_verified_time' => 'Reg Bpjs Verified Time',
            'reg_bpjs_discharge_by' => 'Reg Bpjs Discharge By',
            'reg_bpjs_discharge_time' => 'Reg Bpjs Discharge Time',
            'reg_bpjs_discharge_notes' => 'Reg Bpjs Discharge Notes',
            'apotik_id' => 'Apotik ID',
            'reg_end_date' => 'Reg End Date',
            'new_reg' => 'New Reg',
            'main_dept_id' => 'Main Dept ID',
            'aproval_ffs_is' => 'Aproval Ffs Is',
            'sep_no' => 'Sep No',
            'episode' => 'Episode',
            'ffs_date' => 'Ffs Date',
        ];
    }

    /**
     * Gets query for [[BillingPmts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBillingPmts()
    {
        return $this->hasMany(BillingPmt::className(), ['registration_id' => 'registration_id']);
    }

    /**
     * Gets query for [[CompleteFileExt]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCompleteFileExt()
    {
        return $this->hasOne(CompleteFileExt::className(), ['reg_id' => 'registration_id']);
    }

    /**
     * Gets query for [[CompleteFileHdXt]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCompleteFileHdXt()
    {
        return $this->hasOne(CompleteFileHdXt::className(), ['reg_id' => 'registration_id']);
    }

    /**
     * Gets query for [[FeeAmbulanceDats]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFeeAmbulanceDats()
    {
        return $this->hasMany(FeeAmbulanceDat::className(), ['reg_id' => 'registration_id']);
    }

    /**
     * Gets query for [[Folios]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFolios()
    {
        return $this->hasMany(Folio::className(), ['registration_id' => 'registration_id']);
    }

    /**
     * Gets query for [[InformasiNotesExtDets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInformasiNotesExtDets()
    {
        return $this->hasMany(InformasiNotesExtDet::className(), ['reg_id' => 'registration_id']);
    }

    /**
     * Gets query for [[OkupasiXts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOkupasiXts()
    {
        return $this->hasMany(OkupasiXt::className(), ['reg_id' => 'registration_id']);
    }

    /**
     * Gets query for [[RegApmXt]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRegApmXt()
    {
        return $this->hasOne(RegApmXt::className(), ['reg_id' => 'registration_id']);
    }

    /**
     * Gets query for [[RegDiagExts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRegDiagExts()
    {
        return $this->hasMany(RegDiagExt::className(), ['reg_id' => 'registration_id']);
    }

    /**
     * Gets query for [[RegOnlineXt]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRegOnlineXt()
    {
        return $this->hasOne(RegOnlineXt::className(), ['reg_id' => 'registration_id']);
    }

    /**
     * Gets query for [[RegOpExts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRegOpExts()
    {
        return $this->hasMany(RegOpExt::className(), ['reg_id' => 'registration_id']);
    }

    /**
     * Gets query for [[RegWaSendXt]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRegWaSendXt()
    {
        return $this->hasOne(RegWaSendXt::className(), ['reg_id' => 'registration_id']);
    }

    /**
     * Gets query for [[Patient]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPatient()
    {
        return $this->hasOne(Patient::className(), ['patient_id' => 'patient_id']);
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
     * Gets query for [[RefType]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRefType()
    {
        return $this->hasOne(ReferenceType::className(), ['ref_type_id' => 'ref_type_id']);
    }

    /**
     * Gets query for [[ResponeTimePoliXts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getResponeTimePoliXts()
    {
        return $this->hasMany(ResponeTimePoliXt::className(), ['reg_id' => 'registration_id']);
    }

    /**
     * Gets query for [[ResponetimeChasierExt]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getResponetimeChasierExt()
    {
        return $this->hasOne(ResponetimeChasierExt::className(), ['reg_id' => 'registration_id']);
    }

    /**
     * Gets query for [[SubUnits]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSubUnits()
    {
        return $this->hasMany(SubUnit::className(), ['reg_id' => 'registration_id']);
    }

    /**
     * Gets query for [[Surgery]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSurgery()
    {
        return $this->hasOne(Surgery::className(), ['reg_id' => 'registration_id']);
    }

    /**
     * Gets query for [[ValueEditFarmasiExt]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getValueEditFarmasiExt()
    {
        return $this->hasOne(ValueEditFarmasiExt::className(), ['reg_id' => 'registration_id']);
    }

    /**
     * Gets query for [[XapprovalObillXts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getXapprovalObillXts()
    {
        return $this->hasMany(XapprovalObillXt::className(), ['reg_id' => 'registration_id']);
    }
}
