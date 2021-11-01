<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bpjs_refer_to".
 *
 * @property int $folio_id
 * @property int $patient_id
 * @property string|null $refer_type
 * @property string|null $refer_service
 * @property string|null $refer_notes
 * @property string|null $refer_from_code
 * @property string|null $refer_from_name
 * @property string|null $refer_diag_code
 * @property string|null $refer_diag_name
 * @property string|null $refer_no
 * @property string|null $refer_date
 * @property string|null $refer_patient_insurance
 * @property string|null $refer_patient_cos
 * @property string|null $refer_patient_jenis_peserta
 * @property string|null $refer_patient_sex
 * @property string|null $refer_patient_name
 * @property string|null $refer_patient_card_no
 * @property string|null $refer_patient_medrec
 * @property string|null $refer_patient_birth_date
 * @property string|null $refer_to_code
 * @property string|null $refer_to_name
 * @property string|null $refer_to_clinic
 * @property string|null $refer_to_clinic_name
 * @property int|null $created_by
 * @property string|null $created_time
 * @property int|null $status
 */
class BpjsReferTo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bpjs_refer_to';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['folio_id', 'patient_id'], 'required'],
            [['folio_id', 'patient_id', 'created_by', 'status'], 'integer'],
            [['refer_date', 'refer_patient_birth_date', 'created_time'], 'safe'],
            [['refer_type', 'refer_service', 'refer_from_code', 'refer_diag_code', 'refer_no', 'refer_patient_insurance', 'refer_patient_cos', 'refer_patient_sex', 'refer_patient_card_no', 'refer_patient_medrec', 'refer_to_code', 'refer_to_clinic'], 'string', 'max' => 20],
            [['refer_notes', 'refer_from_name', 'refer_diag_name', 'refer_patient_name', 'refer_to_name', 'refer_to_clinic_name'], 'string', 'max' => 100],
            [['refer_patient_jenis_peserta'], 'string', 'max' => 50],
            [['folio_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'folio_id' => 'Folio ID',
            'patient_id' => 'Patient ID',
            'refer_type' => 'Refer Type',
            'refer_service' => 'Refer Service',
            'refer_notes' => 'Refer Notes',
            'refer_from_code' => 'Refer From Code',
            'refer_from_name' => 'Refer From Name',
            'refer_diag_code' => 'Refer Diag Code',
            'refer_diag_name' => 'Refer Diag Name',
            'refer_no' => 'Refer No',
            'refer_date' => 'Refer Date',
            'refer_patient_insurance' => 'Refer Patient Insurance',
            'refer_patient_cos' => 'Refer Patient Cos',
            'refer_patient_jenis_peserta' => 'Refer Patient Jenis Peserta',
            'refer_patient_sex' => 'Refer Patient Sex',
            'refer_patient_name' => 'Refer Patient Name',
            'refer_patient_card_no' => 'Refer Patient Card No',
            'refer_patient_medrec' => 'Refer Patient Medrec',
            'refer_patient_birth_date' => 'Refer Patient Birth Date',
            'refer_to_code' => 'Refer To Code',
            'refer_to_name' => 'Refer To Name',
            'refer_to_clinic' => 'Refer To Clinic',
            'refer_to_clinic_name' => 'Refer To Clinic Name',
            'created_by' => 'Created By',
            'created_time' => 'Created Time',
            'status' => 'Status',
        ];
    }
}
