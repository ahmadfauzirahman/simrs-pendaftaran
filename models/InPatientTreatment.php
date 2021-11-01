<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "in_patient_treatment".
 *
 * @property int $registration_id
 * @property int|null $patient_id
 * @property int|null $folio_id
 * @property int|null $dept_id
 * @property int|null $unit_id
 * @property int|null $sub_unit_id
 * @property int|null $primary_dokter_id
 * @property string|null $service_date
 * @property string|null $trans_date
 * @property string|null $created_time
 */
class InPatientTreatment extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'in_patient_treatment';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['registration_id'], 'required'],
            [['registration_id', 'patient_id', 'folio_id', 'dept_id', 'unit_id', 'sub_unit_id', 'primary_dokter_id'], 'integer'],
            [['service_date', 'trans_date', 'created_time'], 'safe'],
            [['registration_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'registration_id' => 'Registration ID',
            'patient_id' => 'Patient ID',
            'folio_id' => 'Folio ID',
            'dept_id' => 'Dept ID',
            'unit_id' => 'Unit ID',
            'sub_unit_id' => 'Sub Unit ID',
            'primary_dokter_id' => 'Primary Dokter ID',
            'service_date' => 'Service Date',
            'trans_date' => 'Trans Date',
            'created_time' => 'Created Time',
        ];
    }
}
