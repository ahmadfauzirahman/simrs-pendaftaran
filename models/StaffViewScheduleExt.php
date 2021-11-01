<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "staff_view_schedule_ext".
 *
 * @property int $schedule_id
 * @property int|null $seq
 * @property int|null $id_day
 * @property string|null $schedule_date
 * @property string|null $schedule_time
 * @property string|null $end_time
 * @property int|null $staff_id
 * @property int|null $status_id
 * @property int|null $unit_id
 * @property int|null $view_id
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 */
class StaffViewScheduleExt extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'staff_view_schedule_ext';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['schedule_id'], 'required'],
            [['schedule_id', 'seq', 'id_day', 'staff_id', 'status_id', 'unit_id', 'view_id', 'created_user_id', 'modified_user_id'], 'integer'],
            [['schedule_date', 'schedule_time', 'end_time', 'created_time', 'modified_time'], 'safe'],
            [['schedule_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'schedule_id' => 'Schedule ID',
            'seq' => 'Seq',
            'id_day' => 'Id Day',
            'schedule_date' => 'Schedule Date',
            'schedule_time' => 'Schedule Time',
            'end_time' => 'End Time',
            'staff_id' => 'Staff ID',
            'status_id' => 'Status ID',
            'unit_id' => 'Unit ID',
            'view_id' => 'View ID',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
        ];
    }
}
