<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "unit_med_status".
 *
 * @property int $unit_id
 * @property int $seq
 * @property int $med_status_id
 *
 * @property Unit $unit
 * @property MedStatus $medStatus
 */
class UnitMedStatus extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'unit_med_status';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['unit_id', 'seq', 'med_status_id'], 'required'],
            [['unit_id', 'seq', 'med_status_id'], 'integer'],
            [['unit_id', 'seq'], 'unique', 'targetAttribute' => ['unit_id', 'seq']],
            [['unit_id'], 'exist', 'skipOnError' => true, 'targetClass' => Unit::className(), 'targetAttribute' => ['unit_id' => 'unit_id']],
            [['med_status_id'], 'exist', 'skipOnError' => true, 'targetClass' => MedStatus::className(), 'targetAttribute' => ['med_status_id' => 'med_status_id']],
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
            'med_status_id' => 'Med Status ID',
        ];
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

    /**
     * Gets query for [[MedStatus]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMedStatus()
    {
        return $this->hasOne(MedStatus::className(), ['med_status_id' => 'med_status_id']);
    }
}
