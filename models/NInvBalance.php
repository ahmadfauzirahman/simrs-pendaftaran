<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "n_inv_balance".
 *
 * @property int $item_id
 * @property int $warehouse_id
 * @property float|null $qty_on_hand
 *
 * @property NWarehouse $warehouse
 * @property NItem $item
 */
class NInvBalance extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'n_inv_balance';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['item_id', 'warehouse_id'], 'required'],
            [['item_id', 'warehouse_id'], 'integer'],
            [['qty_on_hand'], 'number'],
            [['item_id', 'warehouse_id'], 'unique', 'targetAttribute' => ['item_id', 'warehouse_id']],
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
            'item_id' => 'Item ID',
            'warehouse_id' => 'Warehouse ID',
            'qty_on_hand' => 'Qty On Hand',
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
