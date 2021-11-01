<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "emr_patient_notes".
 *
 * @property int $patient_id
 * @property int $seq
 * @property int $patient_notes_id
 * @property int $notes_status 1 = unverified document 2 = verified document 3 = verified but need cosigned 5 = cancelled document 
 * @property string|null $notes_description
 * @property string|null $notes_created_time
 * @property int|null $notes_created_by
 * @property string|null $notes_modified_time
 * @property int|null $notes_modified_by
 * @property string|null $notes_cancelled_time
 * @property int|null $notes_cancelled_by
 * @property string|null $notes_cancellation_reason
 * @property string|null $notes_cancelled_signature
 * @property string|null $notes_verified_time
 * @property int|null $notes_verified_by
 * @property string|null $notes_verified_signature
 * @property string|null $notes_cosigned_time
 * @property int|null $notes_cosigned_by
 * @property string|null $notes_cosigned_signature
 * @property string|null $notes_cosigned2_time
 * @property int|null $notes_cosigned2_by
 * @property string|null $notes_cosigned2_signature
 * @property string|null $notes_cosigned3_time
 * @property int|null $notes_cosigned3_by
 * @property string|null $notes_cosigned3_signature
 * @property string|null $notes_cosigned4_time
 * @property int|null $notes_cosigned4_by
 * @property string|null $notes_cosigned4_signature
 * @property string|null $notes_cosigned5_time
 * @property int|null $notes_cosigned5_by
 * @property string|null $notes_cosigned5_signature
 */
class EmrPatientNotes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'emr_patient_notes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['patient_id', 'seq', 'patient_notes_id'], 'required'],
            [['patient_id', 'seq', 'patient_notes_id', 'notes_status', 'notes_created_by', 'notes_modified_by', 'notes_cancelled_by', 'notes_verified_by', 'notes_cosigned_by', 'notes_cosigned2_by', 'notes_cosigned3_by', 'notes_cosigned4_by', 'notes_cosigned5_by'], 'integer'],
            [['notes_created_time', 'notes_modified_time', 'notes_cancelled_time', 'notes_verified_time', 'notes_cosigned_time', 'notes_cosigned2_time', 'notes_cosigned3_time', 'notes_cosigned4_time', 'notes_cosigned5_time'], 'safe'],
            [['notes_description', 'notes_cancellation_reason'], 'string', 'max' => 150],
            [['notes_cancelled_signature', 'notes_verified_signature', 'notes_cosigned_signature', 'notes_cosigned2_signature', 'notes_cosigned3_signature', 'notes_cosigned4_signature', 'notes_cosigned5_signature'], 'string', 'max' => 25],
            [['patient_id', 'seq'], 'unique', 'targetAttribute' => ['patient_id', 'seq']],
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
            'patient_notes_id' => 'Patient Notes ID',
            'notes_status' => 'Notes Status',
            'notes_description' => 'Notes Description',
            'notes_created_time' => 'Notes Created Time',
            'notes_created_by' => 'Notes Created By',
            'notes_modified_time' => 'Notes Modified Time',
            'notes_modified_by' => 'Notes Modified By',
            'notes_cancelled_time' => 'Notes Cancelled Time',
            'notes_cancelled_by' => 'Notes Cancelled By',
            'notes_cancellation_reason' => 'Notes Cancellation Reason',
            'notes_cancelled_signature' => 'Notes Cancelled Signature',
            'notes_verified_time' => 'Notes Verified Time',
            'notes_verified_by' => 'Notes Verified By',
            'notes_verified_signature' => 'Notes Verified Signature',
            'notes_cosigned_time' => 'Notes Cosigned Time',
            'notes_cosigned_by' => 'Notes Cosigned By',
            'notes_cosigned_signature' => 'Notes Cosigned Signature',
            'notes_cosigned2_time' => 'Notes Cosigned2 Time',
            'notes_cosigned2_by' => 'Notes Cosigned2 By',
            'notes_cosigned2_signature' => 'Notes Cosigned2 Signature',
            'notes_cosigned3_time' => 'Notes Cosigned3 Time',
            'notes_cosigned3_by' => 'Notes Cosigned3 By',
            'notes_cosigned3_signature' => 'Notes Cosigned3 Signature',
            'notes_cosigned4_time' => 'Notes Cosigned4 Time',
            'notes_cosigned4_by' => 'Notes Cosigned4 By',
            'notes_cosigned4_signature' => 'Notes Cosigned4 Signature',
            'notes_cosigned5_time' => 'Notes Cosigned5 Time',
            'notes_cosigned5_by' => 'Notes Cosigned5 By',
            'notes_cosigned5_signature' => 'Notes Cosigned5 Signature',
        ];
    }
}
