<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "emr_content".
 *
 * @property int $notes_content_type
 * @property string|null $notes_content_name
 * @property string|null $notes_functions
 * @property resource|null $notes_content
 * @property int|null $notes_report_id
 */
class EmrContent extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'emr_content';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['notes_content_type'], 'required'],
            [['notes_content_type', 'notes_report_id'], 'integer'],
            [['notes_content'], 'string'],
            [['notes_content_name'], 'string', 'max' => 50],
            [['notes_functions'], 'string', 'max' => 10],
            [['notes_content_type'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'notes_content_type' => 'Notes Content Type',
            'notes_content_name' => 'Notes Content Name',
            'notes_functions' => 'Notes Functions',
            'notes_content' => 'Notes Content',
            'notes_report_id' => 'Notes Report ID',
        ];
    }
}
