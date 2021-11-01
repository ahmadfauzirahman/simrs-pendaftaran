<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "unit_physic_exam".
 *
 * @property int $unit_id
 * @property int $seq
 * @property int|null $exam_id
 *
 * @property Exam $exam
 * @property Unit $unit
 */
class UnitPhysicExam extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'unit_physic_exam';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['unit_id', 'seq'], 'required'],
            [['unit_id', 'seq', 'exam_id'], 'integer'],
            [['unit_id', 'seq'], 'unique', 'targetAttribute' => ['unit_id', 'seq']],
            [['exam_id'], 'exist', 'skipOnError' => true, 'targetClass' => Exam::className(), 'targetAttribute' => ['exam_id' => 'exam_id']],
            [['unit_id'], 'exist', 'skipOnError' => true, 'targetClass' => Unit::className(), 'targetAttribute' => ['unit_id' => 'unit_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'unit_id' => 'Unit ID',
            'seq' => 'Seq',
            'exam_id' => 'Exam ID',
        ];
    }

    /**
     * Gets query for [[Exam]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getExam()
    {
        return $this->hasOne(Exam::className(), ['exam_id' => 'exam_id']);
    }

    /**
     * Gets query for [[Unit]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUnit()
    {
        return $this->hasOne(Unit::className(), ['unit_id' => 'unit_id']);
    }
}
