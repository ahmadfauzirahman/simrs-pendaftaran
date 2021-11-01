<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "okupasi_history_xt".
 *
 * @property int $patient_id
 * @property int $seq
 * @property int|null $occup_id
 * @property string|null $occup_name
 * @property string|null $occup_years
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 *
 * @property OkupasiXt $patient
 */
class OkupasiHistoryXt extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'okupasi_history_xt';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['patient_id', 'seq'], 'required'],
            [['patient_id', 'seq', 'occup_id', 'created_user_id', 'modified_user_id'], 'integer'],
            [['created_time', 'modified_time'], 'safe'],
            [['occup_name'], 'string', 'max' => 70],
            [['occup_years'], 'string', 'max' => 20],
            [['patient_id', 'seq'], 'unique', 'targetAttribute' => ['patient_id', 'seq']],
            [['patient_id'], 'exist', 'skipOnError' => true, 'targetClass' => OkupasiXt::className(), 'targetAttribute' => ['patient_id' => 'patient_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'patient_id' => 'Patient ID',
            'seq' => 'Seq',
            'occup_id' => 'Occup ID',
            'occup_name' => 'Occup Name',
            'occup_years' => 'Occup Years',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
        ];
    }

    /**
     * Gets query for [[Patient]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPatient()
    {
        return $this->hasOne(OkupasiXt::className(), ['patient_id' => 'patient_id']);
    }
}
