<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "down_payment".
 *
 * @property int $id_booking
 * @property int|null $patient_id
 * @property int|null $status
 * @property string|null $booking_date
 * @property int|null $payment_id
 * @property int|null $pay_by_id
 * @property float|null $amount
 * @property int|null $billing_id
 * @property string|null $notes
 * @property int|null $registration_id
 * @property string|null $created_time
 * @property int|null $created_user_id
 * @property string|null $modified_time
 * @property int|null $modified_user_id
 *
 * @property Patient $patient
 * @property ScrtUser $createdUser
 * @property ScrtUser $modifiedUser
 * @property Payment $payment
 * @property PayBy $payBy
 */
class DownPayment extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'down_payment';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_booking'], 'required'],
            [['id_booking', 'patient_id', 'status', 'payment_id', 'pay_by_id', 'billing_id', 'registration_id', 'created_user_id', 'modified_user_id'], 'integer'],
            [['booking_date', 'created_time', 'modified_time'], 'safe'],
            [['amount'], 'number'],
            [['notes'], 'string'],
            [['id_booking'], 'unique'],
            [['patient_id'], 'exist', 'skipOnError' => true, 'targetClass' => Patient::className(), 'targetAttribute' => ['patient_id' => 'patient_id']],
            [['created_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['created_user_id' => 'user_id']],
            [['modified_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['modified_user_id' => 'user_id']],
            [['payment_id'], 'exist', 'skipOnError' => true, 'targetClass' => Payment::className(), 'targetAttribute' => ['payment_id' => 'payment_id']],
            [['pay_by_id'], 'exist', 'skipOnError' => true, 'targetClass' => PayBy::className(), 'targetAttribute' => ['pay_by_id' => 'pay_by_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_booking' => 'Id Booking',
            'patient_id' => 'Patient ID',
            'status' => 'Status',
            'booking_date' => 'Booking Date',
            'payment_id' => 'Payment ID',
            'pay_by_id' => 'Pay By ID',
            'amount' => 'Amount',
            'billing_id' => 'Billing ID',
            'notes' => 'Notes',
            'registration_id' => 'Registration ID',
            'created_time' => 'Created Time',
            'created_user_id' => 'Created User ID',
            'modified_time' => 'Modified Time',
            'modified_user_id' => 'Modified User ID',
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
     * Gets query for [[Payment]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPayment()
    {
        return $this->hasOne(Payment::className(), ['payment_id' => 'payment_id']);
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
}
