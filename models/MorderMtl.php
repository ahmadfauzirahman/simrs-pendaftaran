<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "morder_mtl".
 *
 * @property int $order_id
 * @property int $seq
 * @property int|null $material_item_id
 * @property float|null $qty_ordered
 * @property float|null $waste_pc
 * @property string|null $uom
 * @property float|null $uom_conversion
 *
 * @property Item $materialItem
 * @property Morder $order
 */
class MorderMtl extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'morder_mtl';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['order_id', 'seq'], 'required'],
            [['order_id', 'seq', 'material_item_id'], 'integer'],
            [['qty_ordered', 'waste_pc', 'uom_conversion'], 'number'],
            [['uom'], 'string', 'max' => 5],
            [['order_id', 'seq'], 'unique', 'targetAttribute' => ['order_id', 'seq']],
            [['material_item_id'], 'exist', 'skipOnError' => true, 'targetClass' => Item::className(), 'targetAttribute' => ['material_item_id' => 'item_id']],
            [['order_id'], 'exist', 'skipOnError' => true, 'targetClass' => Morder::className(), 'targetAttribute' => ['order_id' => 'order_id']],
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
            'material_item_id' => 'Material Item ID',
            'qty_ordered' => 'Qty Ordered',
            'waste_pc' => 'Waste Pc',
            'uom' => 'Uom',
            'uom_conversion' => 'Uom Conversion',
        ];
    }

    /**
     * Gets query for [[MaterialItem]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMaterialItem()
    {
        return $this->hasOne(Item::className(), ['item_id' => 'material_item_id']);
    }

    /**
     * Gets query for [[Order]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrder()
    {
        return $this->hasOne(Morder::className(), ['order_id' => 'order_id']);
    }
}
