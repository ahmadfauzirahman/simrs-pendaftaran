<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "inv_cost".
 *
 * @property int $cos_id
 * @property int|null $item_id
 * @property float|null $quantity
 * @property float|null $unit_cost
 * @property float|null $used_qty
 */
class InvCost extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'inv_cost';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cos_id'], 'required'],
            [['cos_id', 'item_id'], 'integer'],
            [['quantity', 'unit_cost', 'used_qty'], 'number'],
            [['cos_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'cos_id' => 'Cos ID',
            'item_id' => 'Item ID',
            'quantity' => 'Quantity',
            'unit_cost' => 'Unit Cost',
            'used_qty' => 'Used Qty',
        ];
    }
}
