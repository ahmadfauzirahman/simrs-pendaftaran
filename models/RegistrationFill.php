<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "registration_fill".
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
 * @property string|null $refer_from_doctor
 * @property string|null $refer_from_hospital
 * @property string|null $refer_from_diagnose
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
 * @property string|null $process
 *
 * @property Patient $patient
 * @property PayBy $payBy
 * @property ScrtUser $createdUser
 * @property ScrtUser $modifiedUser
 * @property ReferenceType $refType
 */
class RegistrationFill extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'registration_fill';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['registration_id'], 'required'],
            [['registration_id', 'patient_id', 'pay_by_id', 'contact_seq_pay', 'status', 'first_folio_id', 'created_user_id', 'modified_user_id', 'excess_by_patient', 'ref_type_id', 'main_folio_id'], 'integer'],
            [['registration_date', 'created_time', 'modified_time', 'reservation_date'], 'safe'],
            [['pay_by_amount', 'self_amount', 'amount', 'owing_pay_by', 'owing_self'], 'number'],
            [['refer_from_diagnose', 'notes', 'process'], 'string'],
            [['registration_no'], 'string', 'max' => 20],
            [['refer_from_doctor', 'refer_from_hospital'], 'string', 'max' => 50],
            [['q_number'], 'string', 'max' => 10],
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
            'refer_from_doctor' => 'Refer From Doctor',
            'refer_from_hospital' => 'Refer From Hospital',
            'refer_from_diagnose' => 'Refer From Diagnose',
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
            'process' => 'Process',
        ];
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
}
