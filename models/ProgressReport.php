<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "progress_report".
 *
 * @property int $doc_id
 * @property string|null $doc_name
 * @property string|null $file_name
 * @property resource|null $attachment
 * @property string|null $dept_id
 * @property string|null $unit_id
 * @property string|null $sub_unit_id
 * @property string|null $user_id
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 */
class ProgressReport extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'progress_report';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['doc_id'], 'required'],
            [['doc_id', 'created_user_id', 'modified_user_id'], 'integer'],
            [['attachment'], 'string'],
            [['created_time', 'modified_time'], 'safe'],
            [['doc_name'], 'string', 'max' => 50],
            [['file_name', 'dept_id', 'unit_id', 'sub_unit_id', 'user_id'], 'string', 'max' => 100],
            [['doc_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'doc_id' => 'Doc ID',
            'doc_name' => 'Doc Name',
            'file_name' => 'File Name',
            'attachment' => 'Attachment',
            'dept_id' => 'Dept ID',
            'unit_id' => 'Unit ID',
            'sub_unit_id' => 'Sub Unit ID',
            'user_id' => 'User ID',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
        ];
    }
}
