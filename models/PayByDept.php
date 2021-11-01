<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pay_by_dept".
 *
 * @property int $pay_by_id
 * @property int $seq
 * @property int $unit_id
 * @property int $dept_id
 *
 * @property PayBy $payBy
 * @property Unit $unit
 * @property Department $dept
 */
class PayByDept extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pay_by_dept';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pay_by_id', 'seq'], 'required'],
            [['pay_by_id', 'seq', 'unit_id', 'dept_id'], 'integer'],
            [['unit_id', 'dept_id', 'pay_by_id'], 'unique', 'targetAttribute' => ['unit_id', 'dept_id', 'pay_by_id']],
            [['pay_by_id', 'seq'], 'unique', 'targetAttribute' => ['pay_by_id', 'seq']],
            [['pay_by_id'], 'exist', 'skipOnError' => true, 'targetClass' => PayBy::className(), 'targetAttribute' => ['pay_by_id' => 'pay_by_id']],
            [['unit_id'], 'exist', 'skipOnError' => true, 'targetClass' => Unit::className(), 'targetAttribute' => ['unit_id' => 'unit_id']],
            [['dept_id'], 'exist', 'skipOnError' => true, 'targetClass' => Department::className(), 'targetAttribute' => ['dept_id' => 'dept_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'pay_by_id' => 'Pay By ID',
            'seq' => 'Seq',
            'unit_id' => 'Unit ID',
            'dept_id' => 'Dept ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPayBy()
    {
        return $this->hasOne(PayBy::className(), ['pay_by_id' => 'pay_by_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUnit()
    {
        return $this->hasOne(Unit::className(), ['unit_id' => 'unit_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDept()
    {
        return $this->hasOne(Department::className(), ['dept_id' => 'dept_id']);
    }
}
