<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "n_item_res".
 *
 * @property int $item_id
 * @property int $seq
 * @property int|null $resource_id
 * @property float|null $hours_ordered
 * @property string|null $task
 */
class NItemRes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'n_item_res';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['item_id', 'seq'], 'required'],
            [['item_id', 'seq', 'resource_id'], 'integer'],
            [['hours_ordered'], 'number'],
            [['task'], 'string', 'max' => 50],
            [['item_id', 'seq'], 'unique', 'targetAttribute' => ['item_id', 'seq']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'item_id' => 'Item ID',
            'seq' => 'Seq',
            'resource_id' => 'Resource ID',
            'hours_ordered' => 'Hours Ordered',
            'task' => 'Task',
        ];
    }
}
