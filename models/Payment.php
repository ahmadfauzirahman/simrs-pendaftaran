<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "payment".
 *
 * @property int $payment_id
 * @property string|null $payment_name
 * @property string|null $payment_description
 * @property int|null $customer_id
 * @property resource|null $notes
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 * @property int|null $cash
 * @property int|null $rounding
 * @property int|null $disabled
 * @property int|null $only_for_customer
 * @property int|null $self_payment
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
     * Gets query for [[BillingPmtDets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBillingPmtDets()
    {
        return $this->hasMany(BillingPmtDet::className(), ['payment_id' => 'payment_id']);
    }

    /**
     * Gets query for [[DownPayments]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDownPayments()
    {
        return $this->hasMany(DownPayment::className(), ['payment_id' => 'payment_id']);
    }

    /**
     * Gets query for [[PayBies]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPayBies()
    {
        return $this->hasMany(PayBy::className(), ['closing_payment_id' => 'payment_id']);
    }

    /**
     * Gets query for [[Customer]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCustomer()
    {
        return $this->hasOne(Customer::className(), ['customer_id' => 'customer_id']);
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
}
