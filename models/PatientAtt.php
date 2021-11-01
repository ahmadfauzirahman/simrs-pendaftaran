<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "patient_att".
 *
 * @property int $patient_id
 * @property string $description
 * @property string|null $attachment
 * @property string|null $attachmentdate
 *
 * @property Patient $patient
 */
class PatientAtt extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'patient_att';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['patient_id', 'description'], 'required'],
            [['patient_id'], 'integer'],
            [['attachment'], 'string'],
            [['attachmentdate'], 'safe'],
            [['description'], 'string', 'max' => 50],
            [['patient_id', 'description'], 'unique', 'targetAttribute' => ['patient_id', 'description']],
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
            'description' => 'Description',
            'attachment' => 'Attachment',
            'attachmentdate' => 'Attachmentdate',
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
