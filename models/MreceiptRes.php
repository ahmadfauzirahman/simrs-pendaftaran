<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mreceipt_res".
 *
 * @property int $receipt_id
 * @property int $seq
 * @property int|null $resource_id
 * @property float|null $hour_used
 * @property string|null $task
 *
 * @property Resource $resource
 * @property Mreceipt $receipt
 */
class MreceiptRes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mreceipt_res';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['receipt_id', 'seq'], 'required'],
            [['receipt_id', 'seq', 'resource_id'], 'integer'],
            [['hour_used'], 'number'],
            [['task'], 'string', 'max' => 50],
            [['receipt_id', 'seq'], 'unique', 'targetAttribute' => ['receipt_id', 'seq']],
            [['resource_id'], 'exist', 'skipOnError' => true, 'targetClass' => Resource::className(), 'targetAttribute' => ['resource_id' => 'resource_id']],
            [['receipt_id'], 'exist', 'skipOnError' => true, 'targetClass' => Mreceipt::className(), 'targetAttribute' => ['receipt_id' => 'receipt_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'receipt_id' => 'Receipt ID',
            'seq' => 'Seq',
            'resource_id' => 'Resource ID',
            'hour_used' => 'Hour Used',
            'task' => 'Task',
        ];
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

    /**
     * Gets query for [[Receipt]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReceipt()
    {
        return $this->hasOne(Mreceipt::className(), ['receipt_id' => 'receipt_id']);
    }
}
