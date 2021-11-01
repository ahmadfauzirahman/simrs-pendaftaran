<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "maint_task".
 *
 * @property int $task_id
 * @property string|null $task_date
 * @property int|null $job_id
 * @property int|null $parent_task_id
 * @property string|null $description
 * @property string|null $task_end_date
 * @property int|null $status
 * @property resource|null $photo
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 */
class MaintTask extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'maint_task';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['task_date', 'task_end_date', 'created_time', 'modified_time'], 'safe'],
            [['job_id', 'parent_task_id', 'status', 'created_user_id', 'modified_user_id'], 'integer'],
            [['photo'], 'string'],
            [['description'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'task_id' => 'Task ID',
            'task_date' => 'Task Date',
            'job_id' => 'Job ID',
            'parent_task_id' => 'Parent Task ID',
            'description' => 'Description',
            'task_end_date' => 'Task End Date',
            'status' => 'Status',
            'photo' => 'Photo',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
        ];
    }
}
