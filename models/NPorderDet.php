<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "n_porder_det".
 *
 * @property int $order_id
 * @property int $seq
 * @property int|null $item_id
 * @property float|null $qty_ordered
 * @property float|null $qty_received
 * @property string|null $uom
 * @property float|null $unit_price
 * @property float|null $uom_conversion
 * @property float|null $disc_pc
 * @property float|null $disc_amount
 * @property float|null $add_discount
 * @property string|null $remark
 * @property int|null $request_id
 *
 * @property NItem $item
 * @property NPorder $order
 * @property NPreceiptDet[] $nPreceiptDets
 */
class NPorderDet extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'n_porder_det';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['order_id', 'seq'], 'required'],
            [['order_id', 'seq', 'item_id', 'request_id'], 'integer'],
            [['qty_ordered', 'qty_received', 'unit_price', 'uom_conversion', 'disc_pc', 'disc_amount', 'add_discount'], 'number'],
            [['uom'], 'string', 'max' => 5],
            [['remark'], 'string', 'max' => 50],
            [['order_id', 'seq'], 'unique', 'targetAttribute' => ['order_id', 'seq']],
            [['item_id'], 'exist', 'skipOnError' => true, 'targetClass' => NItem::className(), 'targetAttribute' => ['item_id' => 'item_id']],
            [['order_id'], 'exist', 'skipOnError' => true, 'targetClass' => NPorder::className(), 'targetAttribute' => ['order_id' => 'order_id']],
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
            'qty_received' => 'Qty Received',
            'uom' => 'Uom',
            'unit_price' => 'Unit Price',
            'uom_conversion' => 'Uom Conversion',
            'disc_pc' => 'Disc Pc',
            'disc_amount' => 'Disc Amount',
            'add_discount' => 'Add Discount',
            'remark' => 'Remark',
            'request_id' => 'Request ID',
        ];
    }

    /**
     * Gets query for [[Item]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getItem()
    {
        return $this->hasOne(NItem::className(), ['item_id' => 'item_id']);
    }

    /**
     * Gets query for [[Order]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrder()
    {
        return $this->hasOne(NPorder::className(), ['order_id' => 'order_id']);
    }

    /**
     * Gets query for [[NPreceiptDets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNPreceiptDets()
    {
        return $this->hasMany(NPreceiptDet::className(), ['order_id' => 'order_id', 'order_seq' => 'seq']);
    }
}
