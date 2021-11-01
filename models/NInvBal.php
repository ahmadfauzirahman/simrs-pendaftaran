<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "n_inv_bal".
 *
 * @property int|null $item_id
 * @property int|null $warehouse_id
 * @property float|null $qty
 */
class NInvBal extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'n_inv_bal';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['item_id', 'warehouse_id'], 'integer'],
            [['qty'], 'number'],
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
            'qty' => 'Qty',
        ];
    }
}
