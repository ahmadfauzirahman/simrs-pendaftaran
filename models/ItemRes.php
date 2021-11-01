<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "item_res".
 *
 * @property int $item_id
 * @property int $seq
 * @property int|null $resource_id
 * @property float|null $hours_ordered
 * @property string|null $task
 *
 * @property Item $item
 * @property Resource $resource
 */
class ItemRes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'item_res';
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
            [['item_id'], 'exist', 'skipOnError' => true, 'targetClass' => Item::className(), 'targetAttribute' => ['item_id' => 'item_id']],
            [['resource_id'], 'exist', 'skipOnError' => true, 'targetClass' => Resource::className(), 'targetAttribute' => ['resource_id' => 'resource_id']],
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

    /**
     * Gets query for [[Item]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getItem()
    {
        return $this->hasOne(Item::className(), ['item_id' => 'item_id']);
    }

    /**
     * Gets query for [[Resource]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getResource()
    {
        return $this->hasOne(Resource::className(), ['resource_id' => 'resource_id']);
    }
}
