<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ar_inv_det".
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
 * @property string|null $ship_from
 * @property string|null $ship_until
 * @property int|null $staff_id
 * @property int|null $reg_id
 *
 * @property Item $item
 * @property ArInv $invoice
 */
class ArInvDet extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ar_inv_det';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['invoice_id', 'seq'], 'required'],
            [['invoice_id', 'seq', 'item_id', 'staff_id', 'reg_id'], 'integer'],
            [['quantity', 'uom_conversion', 'unit_price', 'disc_pc', 'disc_amount', 'add_discount'], 'number'],
            [['ship_from', 'ship_until'], 'safe'],
            [['uom'], 'string', 'max' => 5],
            [['remark'], 'string', 'max' => 50],
            [['invoice_id', 'seq'], 'unique', 'targetAttribute' => ['invoice_id', 'seq']],
            [['item_id'], 'exist', 'skipOnError' => true, 'targetClass' => Item::className(), 'targetAttribute' => ['item_id' => 'item_id']],
            [['invoice_id'], 'exist', 'skipOnError' => true, 'targetClass' => ArInv::className(), 'targetAttribute' => ['invoice_id' => 'invoice_id']],
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
            'ship_from' => 'Ship From',
            'ship_until' => 'Ship Until',
            'staff_id' => 'Staff ID',
            'reg_id' => 'Reg ID',
        ];
    }

    /**
     * Gets query for [[Item]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getItem()
    {
        return $this->hasOne(Item::className(), ['item_id' => 'item_id']);
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
