<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "maint_task_mtl".
 *
 * @property int $task_id
 * @property int $seq
 * @property int $item_id
 * @property float $quantity
 * @property float|null $waste
 * @property string|null $uom
 * @property float|null $uom_conversion
 */
class MaintTaskMtl extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'maint_task_mtl';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['task_id', 'seq', 'item_id', 'quantity'], 'required'],
            [['task_id', 'seq', 'item_id'], 'integer'],
            [['quantity', 'waste', 'uom_conversion'], 'number'],
            [['uom'], 'string', 'max' => 5],
            [['task_id', 'seq'], 'unique', 'targetAttribute' => ['task_id', 'seq']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'task_id' => 'Task ID',
            'seq' => 'Seq',
            'item_id' => 'Item ID',
            'quantity' => 'Quantity',
            'waste' => 'Waste',
            'uom' => 'Uom',
            'uom_conversion' => 'Uom Conversion',
        ];
    }
}
