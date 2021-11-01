<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bpjs_referral".
 *
 * @property int $patient_id
 * @property string $bpjs_refer_no
 * @property string $bpjs_refer_date
 * @property string|null $bpjs_refer_from
 * @property string|null $bpjs_refer_from_name
 * @property string|null $bpjs_refer_to
 * @property string|null $bpjs_refer_to_name
 * @property string|null $bpjs_service
 * @property string|null $bpjs_service_to
 * @property string|null $bpjs_service_cos
 * @property string|null $bpjs_from_diagnose_code
 * @property string|null $bpjs_from_diagnose
 * @property int|null $bpjs_from_cause
 * @property string|null $bpjs_from_location
 * @property string|null $bpjs_notes
 * @property int|null $verified_by
 * @property string|null $verified_time
 * @property int|null $status
 * @property int|null $rujukan_intern
 * @property string|null $no_skdp
 */
class BpjsReferral extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bpjs_referral';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['patient_id', 'bpjs_refer_no', 'bpjs_refer_date'], 'required'],
            [['patient_id', 'bpjs_from_cause', 'verified_by', 'status', 'rujukan_intern'], 'integer'],
            [['bpjs_refer_date', 'verified_time'], 'safe'],
            [['bpjs_notes'], 'string'],
            [['bpjs_refer_no', 'bpjs_refer_from', 'bpjs_refer_from_name', 'bpjs_refer_to', 'bpjs_refer_to_name', 'bpjs_from_diagnose_code'], 'string', 'max' => 50],
            [['bpjs_service', 'bpjs_service_to', 'bpjs_service_cos'], 'string', 'max' => 30],
            [['bpjs_from_diagnose'], 'string', 'max' => 250],
            [['bpjs_from_location'], 'string', 'max' => 100],
            [['no_skdp'], 'string', 'max' => 20],
            [['patient_id', 'bpjs_refer_no'], 'unique', 'targetAttribute' => ['patient_id', 'bpjs_refer_no']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'patient_id' => 'Patient ID',
            'bpjs_refer_no' => 'Bpjs Refer No',
            'bpjs_refer_date' => 'Bpjs Refer Date',
            'bpjs_refer_from' => 'Bpjs Refer From',
            'bpjs_refer_from_name' => 'Bpjs Refer From Name',
            'bpjs_refer_to' => 'Bpjs Refer To',
            'bpjs_refer_to_name' => 'Bpjs Refer To Name',
            'bpjs_service' => 'Bpjs Service',
            'bpjs_service_to' => 'Bpjs Service To',
            'bpjs_service_cos' => 'Bpjs Service Cos',
            'bpjs_from_diagnose_code' => 'Bpjs From Diagnose Code',
            'bpjs_from_diagnose' => 'Bpjs From Diagnose',
            'bpjs_from_cause' => 'Bpjs From Cause',
            'bpjs_from_location' => 'Bpjs From Location',
            'bpjs_notes' => 'Bpjs Notes',
            'verified_by' => 'Verified By',
            'verified_time' => 'Verified Time',
            'status' => 'Status',
            'rujukan_intern' => 'Rujukan Intern',
            'no_skdp' => 'No Skdp',
        ];
    }
}
