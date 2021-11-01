<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sub_unit_time".
 *
 * @property int $sub_unit_id
 * @property int $seq
 * @property int|null $dow
 * @property string|null $begin_time
 * @property string|null $end_time
 * @property int|null $patient_limit
 * @property int|null $arm_patient_limit
 *
 * @property SubUnit $subUnit
 */
class SubUnitTime extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sub_unit_time';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sub_unit_id', 'seq'], 'required'],
            [['sub_unit_id', 'seq', 'dow', 'patient_limit', 'arm_patient_limit'], 'integer'],
            [['begin_time', 'end_time'], 'safe'],
            [['sub_unit_id', 'seq'], 'unique', 'targetAttribute' => ['sub_unit_id', 'seq']],
            [['sub_unit_id'], 'exist', 'skipOnError' => true, 'targetClass' => SubUnit::className(), 'targetAttribute' => ['sub_unit_id' => 'sub_unit_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'sub_unit_id' => 'Sub Unit ID',
            'seq' => 'Seq',
            'dow' => 'Dow',
            'begin_time' => 'Begin Time',
            'end_time' => 'End Time',
            'patient_limit' => 'Patient Limit',
            'arm_patient_limit' => 'Arm Patient Limit',
        ];
    }

    /**
     * Gets query for [[SubUnit]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSubUnit()
    {
        return $this->hasOne(SubUnit::className(), ['sub_unit_id' => 'sub_unit_id']);
    }
}
