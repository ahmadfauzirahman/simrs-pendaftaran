<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "emr_notes".
 *
 * @property int $notes_id
 * @property int $notes_type 1 = Admission 2 = Progress Notes 3 = Discharge Notes 4 = Pharmacist Notes 5 = Radiologist Notes 8 = Staff Notes 9 = Other Notes
 * @property string $notes_format_name
 * @property string|null $notes_format_descr
 */
class EmrNotes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'emr_notes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['notes_id', 'notes_format_name'], 'required'],
            [['notes_id', 'notes_type'], 'integer'],
            [['notes_format_name'], 'string', 'max' => 50],
            [['notes_format_descr'], 'string', 'max' => 250],
            [['notes_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'notes_id' => 'Notes ID',
            'notes_type' => 'Notes Type',
            'notes_format_name' => 'Notes Format Name',
            'notes_format_descr' => 'Notes Format Descr',
        ];
    }
}
