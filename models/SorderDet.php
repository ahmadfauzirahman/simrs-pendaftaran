<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sorder_det".
 *
 * @property int $order_id
 * @property int $seq
 * @property int|null $item_id
 * @property float|null $qty_ordered
 * @property float|null $qty_shipped
 * @property string|null $uom
 * @property float|null $uom_conversion
 * @property float|null $unit_price
 * @property float|null $disc_pc
 * @property float|null $disc_amount
 * @property float|null $add_discount
 * @property string|null $remark
 *
 * @property ShipmentDet[] $shipmentDets
 * @property Sorder $order
 * @property Item $item
 */
class SorderDet extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sorder_det';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['order_id', 'seq'], 'required'],
            [['order_id', 'seq', 'item_id'], 'integer'],
            [['qty_ordered', 'qty_shipped', 'uom_conversion', 'unit_price', 'disc_pc', 'disc_amount', 'add_discount'], 'number'],
            [['uom'], 'string', 'max' => 5],
            [['remark'], 'string', 'max' => 50],
            [['order_id', 'seq'], 'unique', 'targetAttribute' => ['order_id', 'seq']],
            [['order_id'], 'exist', 'skipOnError' => true, 'targetClass' => Sorder::className(), 'targetAttribute' => ['order_id' => 'order_id']],
            [['item_id'], 'exist', 'skipOnError' => true, 'targetClass' => Item::className(), 'targetAttribute' => ['item_id' => 'item_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'order_id' => 'Order ID',
            'seq' => 'Seq',
            'item_id' => 'Item ID',
            'qty_ordered' => 'Qty Ordered',
            'qty_shipped' => 'Qty Shipped',
            'uom' => 'Uom',
            'uom_conversion' => 'Uom Conversion',
            'unit_price' => 'Unit Price',
            'disc_pc' => 'Disc Pc',
            'disc_amount' => 'Disc Amount',
            'add_discount' => 'Add Discount',
            'remark' => 'Remark',
        ];
    }

    /**
     * Gets query for [[ShipmentDets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getShipmentDets()
    {
        return $this->hasMany(ShipmentDet::className(), ['order_id' => 'order_id', 'order_seq' => 'seq']);
    }

    /**
     * Gets query for [[Order]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrder()
    {
        return $this->hasOne(Sorder::className(), ['order_id' => 'order_id']);
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
}
