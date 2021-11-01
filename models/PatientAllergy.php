<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "patient_allergy".
 *
 * @property int $patient_id
 * @property int $seq
 * @property string|null $description
 * @property int|null $created_user_id
 * @property string|null $created_time
 *
 * @property Patient $patient
 */
class PatientAllergy extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'patient_allergy';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['patient_id', 'seq'], 'required'],
            [['patient_id', 'seq', 'created_user_id'], 'integer'],
            [['created_time'], 'safe'],
            [['description'], 'string', 'max' => 200],
            [['patient_id', 'seq'], 'unique', 'targetAttribute' => ['patient_id', 'seq']],
            [['patient_id'], 'exist', 'skipOnError' => true, 'targetClass' => Patient::className(), 'targetAttribute' => ['patient_id' => 'patient_id']],
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
            'description' => 'Description',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
        ];
    }

    /**
     * Gets query for [[Patient]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPatient()
    {
        return $this->hasOne(Patient::className(), ['patient_id' => 'patient_id']);
    }
}
