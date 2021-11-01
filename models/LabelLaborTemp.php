<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "label_labor_temp".
 *
 * @property string|null $patient_name
 * @property string|null $kode
 * @property string|null $jabatan
 * @property string|null $birth_date
 * @property string|null $location
 */
class LabelLaborTemp extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'label_labor_temp';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['birth_date'], 'safe'],
            [['patient_name'], 'string', 'max' => 80],
            [['kode', 'jabatan'], 'string', 'max' => 100],
            [['location'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'patient_name' => 'Patient Name',
            'kode' => 'Kode',
            'jabatan' => 'Jabatan',
            'birth_date' => 'Birth Date',
            'location' => 'Location',
        ];
    }
}
