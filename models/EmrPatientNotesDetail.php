<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "emr_patient_notes_detail".
 *
 * @property int $patient_notes_id
 * @property int $notes_seq
 * @property string|null $notes_heading
 * @property int|null $notes_heading_seq
 * @property int|null $notes_content_type 10 = Plain Text 20 = Image 21 = Image from Report 22 = Image from Camera 23 = Image from Scanner (TWAIN)  
 * @property resource|null $notes_content
 * @property int|null $notes_report_id
 */
class EmrPatientNotesDetail extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'emr_patient_notes_detail';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['patient_notes_id', 'notes_seq'], 'required'],
            [['patient_notes_id', 'notes_seq', 'notes_heading_seq', 'notes_content_type', 'notes_report_id'], 'integer'],
            [['notes_content'], 'string'],
            [['notes_heading'], 'string', 'max' => 50],
            [['patient_notes_id', 'notes_seq'], 'unique', 'targetAttribute' => ['patient_notes_id', 'notes_seq']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'patient_notes_id' => 'Patient Notes ID',
            'notes_seq' => 'Notes Seq',
            'notes_heading' => 'Notes Heading',
            'notes_heading_seq' => 'Notes Heading Seq',
            'notes_content_type' => 'Notes Content Type',
            'notes_content' => 'Notes Content',
            'notes_report_id' => 'Notes Report ID',
        ];
    }
}
