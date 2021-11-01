<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "payment".
 *
 * @property int $payment_id
 * @property string $payment_name
 * @property string $payment_description
 * @property int $customer_id
 * @property resource $notes
 * @property int $created_user_id
 * @property string $created_time
 * @property int $modified_user_id
 * @property string $modified_time
 * @property int $cash
 * @property int $rounding
 * @property int $disabled
 * @property int $only_for_customer
 * @property int $self_payment
 *
 * @property BillingPmtDet[] $billingPmtDets
 * @property DownPayment[] $downPayments
 * @property PayBy[] $payBies
 * @property Customer $customer
 * @property ScrtUser $createdUser
 * @property ScrtUser $modifiedUser
 */
class Payment extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'payment';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['customer_id', 'created_user_id', 'modified_user_id', 'cash', 'rounding', 'disabled', 'only_for_customer', 'self_payment'], 'integer'],
            [['notes'], 'string'],
            [['created_time', 'modified_time'], 'safe'],
            [['payment_name'], 'string', 'max' => 50],
            [['payment_description'], 'string', 'max' => 100],
            [['customer_id'], 'exist', 'skipOnError' => true, 'targetClass' => Customer::className(), 'targetAttribute' => ['customer_id' => 'customer_id']],
            [['created_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['created_user_id' => 'user_id']],
            [['modified_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['modified_user_id' => 'user_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'payment_id' => 'Payment ID',
            'payment_name' => 'Payment Name',
            'payment_description' => 'Payment Description',
            'customer_id' => 'Customer ID',
            'notes' => 'Notes',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
            'cash' => 'Cash',
            'rounding' => 'Rounding',
            'disabled' => 'Disabled',
            'only_for_customer' => 'Only For Customer',
            'self_payment' => 'Self Payment',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBillingPmtDets()
    {
        return $this->hasMany(BillingPmtDet::className(), ['payment_id' => 'payment_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDownPayments()
    {
        return $this->hasMany(DownPayment::className(), ['payment_id' => 'payment_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPayBies()
    {
        return $this->hasMany(PayBy::className(), ['closing_payment_id' => 'payment_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCustomer()
    {
        return $this->hasOne(Customer::className(), ['customer_id' => 'customer_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedUser()
    {
        return $this->hasOne(ScrtUser::className(), ['user_id' => 'created_user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getModifiedUser()
    {
        return $this->hasOne(ScrtUser::className(), ['user_id' => 'modified_user_id']);
    }
}
