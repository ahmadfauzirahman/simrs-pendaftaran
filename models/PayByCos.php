<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pay_by_cos".
 *
 * @property int $pay_by_id
 * @property int $dept_id
 * @property int $cos_id
 *
 * @property PayBy $payBy
 * @property Department $dept
 * @property Cos $cos
 */
class PayByCos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pay_by_cos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pay_by_id', 'dept_id'], 'required'],
            [['pay_by_id', 'dept_id', 'cos_id'], 'integer'],
            [['pay_by_id', 'dept_id'], 'unique', 'targetAttribute' => ['pay_by_id', 'dept_id']],
            [['pay_by_id'], 'exist', 'skipOnError' => true, 'targetClass' => PayBy::className(), 'targetAttribute' => ['pay_by_id' => 'pay_by_id']],
            [['dept_id'], 'exist', 'skipOnError' => true, 'targetClass' => Department::className(), 'targetAttribute' => ['dept_id' => 'dept_id']],
            [['cos_id'], 'exist', 'skipOnError' => true, 'targetClass' => Cos::className(), 'targetAttribute' => ['cos_id' => 'cos_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'pay_by_id' => 'Pay By ID',
            'dept_id' => 'Dept ID',
            'cos_id' => 'Cos ID',
        ];
    }

    /**
     * Gets query for [[PayBy]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPayBy()
    {
        return $this->hasOne(PayBy::className(), ['pay_by_id' => 'pay_by_id']);
    }

    /**
     * Gets query for [[Dept]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDept()
    {
        return $this->hasOne(Department::className(), ['dept_id' => 'dept_id']);
    }

    /**
     * Gets query for [[Cos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCos()
    {
        return $this->hasOne(Cos::className(), ['cos_id' => 'cos_id']);
    }
}
