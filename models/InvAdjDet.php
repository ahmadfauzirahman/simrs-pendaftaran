<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "inv_adj_det".
 *
 * @property int $adjustment_id
 * @property int $seq
 * @property int|null $item_id
 * @property float|null $qty_requested
 * @property float|null $quantity
 * @property string|null $uom
 * @property float|null $uom_conversion
 * @property string|null $description
 *
 * @property InvAdj $adjustment
 * @property Item $item
 */
class InvAdjDet extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'inv_adj_det';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['adjustment_id', 'seq'], 'required'],
            [['adjustment_id', 'seq', 'item_id'], 'integer'],
            [['qty_requested', 'quantity', 'uom_conversion'], 'number'],
            [['uom'], 'string', 'max' => 5],
            [['description'], 'string', 'max' => 50],
            [['adjustment_id', 'seq'], 'unique', 'targetAttribute' => ['adjustment_id', 'seq']],
            [['adjustment_id'], 'exist', 'skipOnError' => true, 'targetClass' => InvAdj::className(), 'targetAttribute' => ['adjustment_id' => 'adjustment_id']],
            [['item_id'], 'exist', 'skipOnError' => true, 'targetClass' => Item::className(), 'targetAttribute' => ['item_id' => 'item_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'adjustment_id' => 'Adjustment ID',
            'seq' => 'Seq',
            'item_id' => 'Item ID',
            'qty_requested' => 'Qty Requested',
            'quantity' => 'Quantity',
            'uom' => 'Uom',
            'uom_conversion' => 'Uom Conversion',
            'description' => 'Description',
        ];
    }

    /**
     * Gets query for [[Adjustment]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAdjustment()
    {
        return $this->hasOne(InvAdj::className(), ['adjustment_id' => 'adjustment_id']);
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
