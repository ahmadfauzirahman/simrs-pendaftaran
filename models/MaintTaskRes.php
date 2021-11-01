<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "maint_task_res".
 *
 * @property int $task_id
 * @property int $seq
 * @property int $resource_id
 * @property float $quantity
 * @property string|null $task
 */
class MaintTaskRes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'maint_task_res';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['task_id', 'seq', 'resource_id', 'quantity'], 'required'],
            [['task_id', 'seq', 'resource_id'], 'integer'],
            [['quantity'], 'number'],
            [['task'], 'string', 'max' => 50],
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
            'resource_id' => 'Resource ID',
            'quantity' => 'Quantity',
            'task' => 'Task',
        ];
    }
}
