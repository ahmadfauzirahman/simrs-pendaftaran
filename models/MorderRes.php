<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "morder_res".
 *
 * @property int $order_id
 * @property int $seq
 * @property int|null $resource_id
 * @property float|null $hours_ordered
 * @property string|null $task
 *
 * @property Morder $order
 */
class MorderRes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'morder_res';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['order_id', 'seq'], 'required'],
            [['order_id', 'seq', 'resource_id'], 'integer'],
            [['hours_ordered'], 'number'],
            [['task'], 'string', 'max' => 50],
            [['order_id', 'seq'], 'unique', 'targetAttribute' => ['order_id', 'seq']],
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
            'resource_id' => 'Resource ID',
            'hours_ordered' => 'Hours Ordered',
            'task' => 'Task',
        ];
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
