<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ap_inv_det".
 *
 * @property int $invoice_id
 * @property int $seq
 * @property int|null $item_id
 * @property float|null $quantity
 * @property string|null $uom
 * @property float|null $uom_conversion
 * @property float|null $unit_price
 * @property float|null $disc_pc
 * @property float|null $disc_amount
 * @property float|null $add_discount
 * @property string|null $remark
 * @property int|null $receipt_id
 * @property int|null $order_id
 *
 * @property ApInv $invoice
 */
class ApInvDet extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ap_inv_det';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['invoice_id', 'seq'], 'required'],
            [['invoice_id', 'seq', 'item_id', 'receipt_id', 'order_id'], 'integer'],
            [['quantity', 'uom_conversion', 'unit_price', 'disc_pc', 'disc_amount', 'add_discount'], 'number'],
            [['uom'], 'string', 'max' => 5],
            [['remark'], 'string', 'max' => 50],
            [['invoice_id', 'seq'], 'unique', 'targetAttribute' => ['invoice_id', 'seq']],
            [['invoice_id'], 'exist', 'skipOnError' => true, 'targetClass' => ApInv::className(), 'targetAttribute' => ['invoice_id' => 'invoice_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'invoice_id' => 'Invoice ID',
            'seq' => 'Seq',
            'item_id' => 'Item ID',
            'quantity' => 'Quantity',
            'uom' => 'Uom',
            'uom_conversion' => 'Uom Conversion',
            'unit_price' => 'Unit Price',
            'disc_pc' => 'Disc Pc',
            'disc_amount' => 'Disc Amount',
            'add_discount' => 'Add Discount',
            'remark' => 'Remark',
            'receipt_id' => 'Receipt ID',
            'order_id' => 'Order ID',
        ];
    }

    /**
     * Gets query for [[Invoice]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInvoice()
    {
        return $this->hasOne(ApInv::className(), ['invoice_id' => 'invoice_id']);
    }
}
