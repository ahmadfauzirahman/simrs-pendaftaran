<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "warehouse_item".
 *
 * @property int $warehouse_id
 * @property int $item_id
 * @property float|null $minimum_qty
 * @property float|null $safety_level
 * @property float|null $economic_order_qty
 * @property string|null $location
 * @property int|null $location_row
 * @property int|null $location_col
 *
 * @property Warehouse $warehouse
 * @property Item $item
 */
class WarehouseItem extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'warehouse_item';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['warehouse_id', 'item_id'], 'required'],
            [['warehouse_id', 'item_id', 'location_row', 'location_col'], 'integer'],
            [['minimum_qty', 'safety_level', 'economic_order_qty'], 'number'],
            [['location'], 'string', 'max' => 100],
            [['warehouse_id', 'item_id'], 'unique', 'targetAttribute' => ['warehouse_id', 'item_id']],
            [['warehouse_id'], 'exist', 'skipOnError' => true, 'targetClass' => Warehouse::className(), 'targetAttribute' => ['warehouse_id' => 'warehouse_id']],
            [['item_id'], 'exist', 'skipOnError' => true, 'targetClass' => Item::className(), 'targetAttribute' => ['item_id' => 'item_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'warehouse_id' => 'Warehouse ID',
            'item_id' => 'Item ID',
            'minimum_qty' => 'Minimum Qty',
            'safety_level' => 'Safety Level',
            'economic_order_qty' => 'Economic Order Qty',
            'location' => 'Location',
            'location_row' => 'Location Row',
            'location_col' => 'Location Col',
        ];
    }

    /**
     * Gets query for [[Warehouse]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getWarehouse()
    {
        return $this->hasOne(Warehouse::className(), ['warehouse_id' => 'warehouse_id']);
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
