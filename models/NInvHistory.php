<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "n_inv_history".
 *
 * @property int $history_id
 * @property int|null $item_id
 * @property int|null $warehouse_id
 * @property string|null $trans_date
 * @property string|null $trans_no
 * @property int|null $trans_type
 * @property int|null $trans_id
 * @property float|null $quantity
 * @property float|null $original_qty
 * @property string|null $original_uom
 * @property float|null $uom_conversion
 * @property string|null $description
 * @property float|null $wg_avg_cost
 *
 * @property NWarehouse $warehouse
 * @property NItem $item
 */
class NInvHistory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'n_inv_history';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['item_id', 'warehouse_id', 'trans_type', 'trans_id'], 'integer'],
            [['trans_date'], 'safe'],
            [['quantity', 'original_qty', 'uom_conversion', 'wg_avg_cost'], 'number'],
            [['trans_no'], 'string', 'max' => 20],
            [['original_uom'], 'string', 'max' => 5],
            [['description'], 'string', 'max' => 100],
            [['warehouse_id'], 'exist', 'skipOnError' => true, 'targetClass' => NWarehouse::className(), 'targetAttribute' => ['warehouse_id' => 'warehouse_id']],
            [['item_id'], 'exist', 'skipOnError' => true, 'targetClass' => NItem::className(), 'targetAttribute' => ['item_id' => 'item_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'history_id' => 'History ID',
            'item_id' => 'Item ID',
            'warehouse_id' => 'Warehouse ID',
            'trans_date' => 'Trans Date',
            'trans_no' => 'Trans No',
            'trans_type' => 'Trans Type',
            'trans_id' => 'Trans ID',
            'quantity' => 'Quantity',
            'original_qty' => 'Original Qty',
            'original_uom' => 'Original Uom',
            'uom_conversion' => 'Uom Conversion',
            'description' => 'Description',
            'wg_avg_cost' => 'Wg Avg Cost',
        ];
    }

    /**
     * Gets query for [[Warehouse]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getWarehouse()
    {
        return $this->hasOne(NWarehouse::className(), ['warehouse_id' => 'warehouse_id']);
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
}
