<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "patient_object".
 *
 * @property int $patient_id
 * @property int $object_id
 */
class PatientObject extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'patient_object';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['patient_id', 'object_id'], 'required'],
            [['patient_id', 'object_id'], 'integer'],
            [['patient_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'patient_id' => 'Patient ID',
            'object_id' => 'Object ID',
        ];
    }
}
