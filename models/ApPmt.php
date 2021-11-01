<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ap_pmt".
 *
 * @property int $payment_id
 * @property string|null $payment_no
 * @property string|null $payment_date
 * @property int|null $gl_year
 * @property int|null $gl_period
 * @property int|null $vendor_id
 * @property int|null $bank_id
 * @property string|null $check_no
 * @property int|null $currency_id
 * @property float|null $exchange_rate
 * @property float|null $payment_amount
 * @property float|null $check_amount
 * @property float|null $rounding_amount
 * @property string|null $due_date
 * @property int|null $posted
 * @property int|null $reconciled
 * @property string|null $reconciled_time
 * @property string|null $void_time
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
 * @property int|null $rounding_gl_account_id
 * @property int|null $printed_id
 *
 * @property Bank $bank
 * @property ScrtUser $createdUser
 * @property ScrtUser $modifiedUser
 * @property Vendor $vendor
 * @property Currency $currency
 * @property ApPmtDet[] $apPmtDets
 */
class ApPmt extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ap_pmt';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['payment_id'], 'required'],
            [['payment_id', 'gl_year', 'gl_period', 'vendor_id', 'bank_id', 'currency_id', 'posted', 'reconciled', 'void', 'deposit', 'deposit_invoice', 'deposit_payment', 'post_dated', 'created_user_id', 'modified_user_id', 'rounding_gl_account_id', 'printed_id'], 'integer'],
            [['payment_date', 'due_date', 'reconciled_time', 'void_time', 'created_time', 'modified_time'], 'safe'],
            [['exchange_rate', 'payment_amount', 'check_amount', 'rounding_amount', 'dp_amount'], 'number'],
            [['notes'], 'string'],
            [['payment_no', 'check_no'], 'string', 'max' => 20],
            [['description'], 'string', 'max' => 100],
            [['payment_id'], 'unique'],
            [['bank_id'], 'exist', 'skipOnError' => true, 'targetClass' => Bank::className(), 'targetAttribute' => ['bank_id' => 'bank_id']],
            [['created_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['created_user_id' => 'user_id']],
            [['modified_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['modified_user_id' => 'user_id']],
            [['vendor_id'], 'exist', 'skipOnError' => true, 'targetClass' => Vendor::className(), 'targetAttribute' => ['vendor_id' => 'vendor_id']],
            [['currency_id'], 'exist', 'skipOnError' => true, 'targetClass' => Currency::className(), 'targetAttribute' => ['currency_id' => 'currency_id']],
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
            'vendor_id' => 'Vendor ID',
            'bank_id' => 'Bank ID',
            'check_no' => 'Check No',
            'currency_id' => 'Currency ID',
            'exchange_rate' => 'Exchange Rate',
            'payment_amount' => 'Payment Amount',
            'check_amount' => 'Check Amount',
            'rounding_amount' => 'Rounding Amount',
            'due_date' => 'Due Date',
            'posted' => 'Posted',
            'reconciled' => 'Reconciled',
            'reconciled_time' => 'Reconciled Time',
            'void_time' => 'Void Time',
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
            'rounding_gl_account_id' => 'Rounding Gl Account ID',
            'printed_id' => 'Printed ID',
        ];
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
     * Gets query for [[Vendor]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getVendor()
    {
        return $this->hasOne(Vendor::className(), ['vendor_id' => 'vendor_id']);
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
     * Gets query for [[ApPmtDets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getApPmtDets()
    {
        return $this->hasMany(ApPmtDet::className(), ['payment_id' => 'payment_id']);
    }
}
