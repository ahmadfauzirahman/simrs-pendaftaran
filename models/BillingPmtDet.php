<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "billing_pmt_det".
 *
 * @property int $bill_pmt_id
 * @property int $seq
 * @property int|null $payment_id
 * @property float|null $amount
 * @property float|null $rounding_amount
 * @property string|null $description
 * @property int|null $invoice_id
 * @property float|null $change_amount
 * @property int|null $allocated_bill_pmt_id
 *
 * @property Payment $payment
 * @property BillingPmt $billPmt
 * @property ArInv $invoice
 */
class BillingPmtDet extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'billing_pmt_det';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['bill_pmt_id', 'seq'], 'required'],
            [['bill_pmt_id', 'seq', 'payment_id', 'invoice_id', 'allocated_bill_pmt_id'], 'integer'],
            [['amount', 'rounding_amount', 'change_amount'], 'number'],
            [['description'], 'string', 'max' => 50],
            [['bill_pmt_id', 'seq'], 'unique', 'targetAttribute' => ['bill_pmt_id', 'seq']],
            [['payment_id'], 'exist', 'skipOnError' => true, 'targetClass' => Payment::className(), 'targetAttribute' => ['payment_id' => 'payment_id']],
            [['bill_pmt_id'], 'exist', 'skipOnError' => true, 'targetClass' => BillingPmt::className(), 'targetAttribute' => ['bill_pmt_id' => 'bill_pmt_id']],
            [['invoice_id'], 'exist', 'skipOnError' => true, 'targetClass' => ArInv::className(), 'targetAttribute' => ['invoice_id' => 'invoice_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'bill_pmt_id' => 'Bill Pmt ID',
            'seq' => 'Seq',
            'payment_id' => 'Payment ID',
            'amount' => 'Amount',
            'rounding_amount' => 'Rounding Amount',
            'description' => 'Description',
            'invoice_id' => 'Invoice ID',
            'change_amount' => 'Change Amount',
            'allocated_bill_pmt_id' => 'Allocated Bill Pmt ID',
        ];
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
     * Gets query for [[BillPmt]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBillPmt()
    {
        return $this->hasOne(BillingPmt::className(), ['bill_pmt_id' => 'bill_pmt_id']);
    }

    /**
     * Gets query for [[Invoice]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInvoice()
    {
        return $this->hasOne(ArInv::className(), ['invoice_id' => 'invoice_id']);
    }
}
