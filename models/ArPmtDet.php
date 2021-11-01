<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ar_pmt_det".
 *
 * @property int $payment_id
 * @property int $seq
 * @property int|null $invoice_id
 * @property float|null $payment_amount
 * @property float|null $rounding_amount
 * @property float|null $discount_amount
 * @property float|null $writeoff_amount
 * @property float|null $exchange_rate
 * @property string|null $remark
 *
 * @property ArPmt $payment
 * @property ArInv $invoice
 */
class ArPmtDet extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ar_pmt_det';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['payment_id', 'seq'], 'required'],
            [['payment_id', 'seq', 'invoice_id'], 'integer'],
            [['payment_amount', 'rounding_amount', 'discount_amount', 'writeoff_amount', 'exchange_rate'], 'number'],
            [['remark'], 'string', 'max' => 100],
            [['payment_id', 'seq'], 'unique', 'targetAttribute' => ['payment_id', 'seq']],
            [['payment_id'], 'exist', 'skipOnError' => true, 'targetClass' => ArPmt::className(), 'targetAttribute' => ['payment_id' => 'payment_id']],
            [['invoice_id'], 'exist', 'skipOnError' => true, 'targetClass' => ArInv::className(), 'targetAttribute' => ['invoice_id' => 'invoice_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'payment_id' => 'Payment ID',
            'seq' => 'Seq',
            'invoice_id' => 'Invoice ID',
            'payment_amount' => 'Payment Amount',
            'rounding_amount' => 'Rounding Amount',
            'discount_amount' => 'Discount Amount',
            'writeoff_amount' => 'Writeoff Amount',
            'exchange_rate' => 'Exchange Rate',
            'remark' => 'Remark',
        ];
    }

    /**
     * Gets query for [[Payment]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPayment()
    {
        return $this->hasOne(ArPmt::className(), ['payment_id' => 'payment_id']);
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
