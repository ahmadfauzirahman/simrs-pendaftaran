<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "activity_mntnc".
 *
 * @property int $activity_id
 * @property string|null $activity_no
 * @property int|null $staff_id
 * @property int|null $staff_id2
 * @property int|null $staff_id3
 * @property int|null $staff_id4
 * @property string|null $activity_date
 * @property int|null $unit_request
 * @property string|null $start_activity
 * @property string|null $end_activity
 * @property string|null $end_durasi
 * @property int|null $activity_type
 * @property string|null $object_other
 * @property int|null $object_asset
 * @property int|null $status
 * @property string|null $notes
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 * @property int|null $posted
 *
 * @property StaffOther $staff
 * @property ScrtUser $createdUser
 * @property ScrtUser $modifiedUser
 * @property StatusActvMntn $status0
 * @property ActvTypeMntn $activityType
 */
class ActivityMntnc extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'activity_mntnc';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['activity_id'], 'required'],
            [['activity_id', 'staff_id', 'staff_id2', 'staff_id3', 'staff_id4', 'unit_request', 'activity_type', 'object_asset', 'status', 'created_user_id', 'modified_user_id', 'posted'], 'integer'],
            [['activity_date', 'start_activity', 'end_activity', 'created_time', 'modified_time'], 'safe'],
            [['notes'], 'string'],
            [['activity_no'], 'string', 'max' => 20],
            [['end_durasi', 'object_other'], 'string', 'max' => 50],
            [['activity_id'], 'unique'],
            [['staff_id'], 'exist', 'skipOnError' => true, 'targetClass' => StaffOther::className(), 'targetAttribute' => ['staff_id' => 'staff_id']],
            [['created_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['created_user_id' => 'user_id']],
            [['modified_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['modified_user_id' => 'user_id']],
            [['status'], 'exist', 'skipOnError' => true, 'targetClass' => StatusActvMntn::className(), 'targetAttribute' => ['status' => 'status_id']],
            [['activity_type'], 'exist', 'skipOnError' => true, 'targetClass' => ActvTypeMntn::className(), 'targetAttribute' => ['activity_type' => 'actv_type_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'activity_id' => 'Activity ID',
            'activity_no' => 'Activity No',
            'staff_id' => 'Staff ID',
            'staff_id2' => 'Staff Id2',
            'staff_id3' => 'Staff Id3',
            'staff_id4' => 'Staff Id4',
            'activity_date' => 'Activity Date',
            'unit_request' => 'Unit Request',
            'start_activity' => 'Start Activity',
            'end_activity' => 'End Activity',
            'end_durasi' => 'End Durasi',
            'activity_type' => 'Activity Type',
            'object_other' => 'Object Other',
            'object_asset' => 'Object Asset',
            'status' => 'Status',
            'notes' => 'Notes',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
            'posted' => 'Posted',
        ];
    }

    /**
     * Gets query for [[Staff]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStaff()
    {
        return $this->hasOne(StaffOther::className(), ['staff_id' => 'staff_id']);
    }

    /**
     * Gets query for [[CreatedUser]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedUser()
    {
        return $this->hasOne(ScrtUser::className(), ['user_id' => 'created_user_id']);
    }

    /**
     * Gets query for [[ModifiedUser]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getModifiedUser()
    {
        return $this->hasOne(ScrtUser::className(), ['user_id' => 'modified_user_id']);
    }

    /**
     * Gets query for [[Status0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStatus0()
    {
        return $this->hasOne(StatusActvMntn::className(), ['status_id' => 'status']);
    }

    /**
     * Gets query for [[ActivityType]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getActivityType()
    {
        return $this->hasOne(ActvTypeMntn::className(), ['actv_type_id' => 'activity_type']);
    }
}
