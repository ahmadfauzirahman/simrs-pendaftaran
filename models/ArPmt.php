<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ar_pmt".
 *
 * @property int $payment_id
 * @property string|null $payment_no
 * @property string|null $payment_date
 * @property int|null $gl_year
 * @property int|null $gl_period
 * @property int|null $customer_id
 * @property int|null $bank_id
 * @property string|null $check_no
 * @property int|null $currency_id
 * @property float|null $exchange_rate
 * @property float|null $payment_amount
 * @property float|null $check_amount
 * @property float|null $rounding_amount
 * @property int|null $rounding_gl_account_id
 * @property string|null $due_date
 * @property int|null $posted
 * @property int|null $reconciled
 * @property int|null $void
 * @property int|null $deposit
 * @property int|null $deposit_invoice
 * @property int|null $deposit_payment
 * @property float|null $dp_amount
 * @property int|null $post_dated
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 * @property string|null $description
 * @property string|null $notes
 * @property int|null $remark
 *
 * @property ScrtUser $createdUser
 * @property ScrtUser $modifiedUser
 * @property Customer $customer
 * @property Currency $currency
 * @property Bank $bank
 * @property ArPmtDet[] $arPmtDets
 */
class ArPmt extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ar_pmt';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['payment_id'], 'required'],
            [['payment_id', 'gl_year', 'gl_period', 'customer_id', 'bank_id', 'currency_id', 'rounding_gl_account_id', 'posted', 'reconciled', 'void', 'deposit', 'deposit_invoice', 'deposit_payment', 'post_dated', 'created_user_id', 'modified_user_id', 'remark'], 'integer'],
            [['payment_date', 'due_date', 'created_time', 'modified_time'], 'safe'],
            [['exchange_rate', 'payment_amount', 'check_amount', 'rounding_amount', 'dp_amount'], 'number'],
            [['notes'], 'string'],
            [['payment_no', 'check_no'], 'string', 'max' => 20],
            [['description'], 'string', 'max' => 100],
            [['payment_id'], 'unique'],
            [['created_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['created_user_id' => 'user_id']],
            [['modified_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['modified_user_id' => 'user_id']],
            [['customer_id'], 'exist', 'skipOnError' => true, 'targetClass' => Customer::className(), 'targetAttribute' => ['customer_id' => 'customer_id']],
            [['currency_id'], 'exist', 'skipOnError' => true, 'targetClass' => Currency::className(), 'targetAttribute' => ['currency_id' => 'currency_id']],
            [['bank_id'], 'exist', 'skipOnError' => true, 'targetClass' => Bank::className(), 'targetAttribute' => ['bank_id' => 'bank_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'payment_id' => 'Payment ID',
            'payment_no' => 'Payment No',
            'payment_date' => 'Payment Date',
            'gl_year' => 'Gl Year',
            'gl_period' => 'Gl Period',
            'customer_id' => 'Customer ID',
            'bank_id' => 'Bank ID',
            'check_no' => 'Check No',
            'currency_id' => 'Currency ID',
            'exchange_rate' => 'Exchange Rate',
            'payment_amount' => 'Payment Amount',
            'check_amount' => 'Check Amount',
            'rounding_amount' => 'Rounding Amount',
            'rounding_gl_account_id' => 'Rounding Gl Account ID',
            'due_date' => 'Due Date',
            'posted' => 'Posted',
            'reconciled' => 'Reconciled',
            'void' => 'Void',
            'deposit' => 'Deposit',
            'deposit_invoice' => 'Deposit Invoice',
            'deposit_payment' => 'Deposit Payment',
            'dp_amount' => 'Dp Amount',
            'post_dated' => 'Post Dated',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
            'description' => 'Description',
            'notes' => 'Notes',
            'remark' => 'Remark',
        ];
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
     * Gets query for [[Customer]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCustomer()
    {
        return $this->hasOne(Customer::className(), ['customer_id' => 'customer_id']);
    }

    /**
     * Gets query for [[Currency]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCurrency()
    {
        return $this->hasOne(Currency::className(), ['currency_id' => 'currency_id']);
    }

    /**
     * Gets query for [[Bank]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBank()
    {
        return $this->hasOne(Bank::className(), ['bank_id' => 'bank_id']);
    }

    /**
     * Gets query for [[ArPmtDets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getArPmtDets()
    {
        return $this->hasMany(ArPmtDet::className(), ['payment_id' => 'payment_id']);
    }
}
