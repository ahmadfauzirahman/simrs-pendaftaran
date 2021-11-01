<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "shipment_det".
 *
 * @property int $shipment_id
 * @property int $seq
 * @property int|null $item_id
 * @property int|null $order_id
 * @property int|null $order_seq
 * @property float|null $qty_shipped
 * @property string|null $uom
 * @property float|null $uom_conversion
 * @property string|null $remark
 *
 * @property Shipment $shipment
 * @property Item $item
 * @property SorderDet $order
 */
class ShipmentDet extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'shipment_det';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['shipment_id', 'seq'], 'required'],
            [['shipment_id', 'seq', 'item_id', 'order_id', 'order_seq'], 'integer'],
            [['qty_shipped', 'uom_conversion'], 'number'],
            [['uom'], 'string', 'max' => 5],
            [['remark'], 'string', 'max' => 50],
            [['shipment_id', 'seq'], 'unique', 'targetAttribute' => ['shipment_id', 'seq']],
            [['shipment_id'], 'exist', 'skipOnError' => true, 'targetClass' => Shipment::className(), 'targetAttribute' => ['shipment_id' => 'shipment_id']],
            [['item_id'], 'exist', 'skipOnError' => true, 'targetClass' => Item::className(), 'targetAttribute' => ['item_id' => 'item_id']],
            [['order_id', 'order_seq'], 'exist', 'skipOnError' => true, 'targetClass' => SorderDet::className(), 'targetAttribute' => ['order_id' => 'order_id', 'order_seq' => 'seq']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'shipment_id' => 'Shipment ID',
            'seq' => 'Seq',
            'item_id' => 'Item ID',
            'order_id' => 'Order ID',
            'order_seq' => 'Order Seq',
            'qty_shipped' => 'Qty Shipped',
            'uom' => 'Uom',
            'uom_conversion' => 'Uom Conversion',
            'remark' => 'Remark',
        ];
    }

    /**
     * Gets query for [[Shipment]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getShipment()
    {
        return $this->hasOne(Shipment::className(), ['shipment_id' => 'shipment_id']);
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
     * Gets query for [[Order]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrder()
    {
        return $this->hasOne(SorderDet::className(), ['order_id' => 'order_id', 'seq' => 'order_seq']);
    }
}
