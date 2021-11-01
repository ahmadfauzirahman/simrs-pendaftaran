<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "maint_act".
 *
 * @property int $job_id
 * @property string|null $job_no
 * @property int|null $department_id
 * @property int|null $category_id
 * @property string|null $request_time
 * @property int|null $location_id
 * @property string|null $location_mark
 * @property int|null $asset_id
 * @property string|null $contact_name
 * @property int|null $severity_id
 * @property string|null $request_detail
 * @property int|null $requested_by
 * @property string|null $respond_time
 * @property int|null $responded_by
 * @property string|null $estimated_due_date
 * @property int|null $result_id
 * @property string|null $result_detail
 * @property string|null $crew_member
 * @property string|null $request_photo
 * @property string|null $result_photo
 * @property int|null $posted_by
 * @property string|null $posted_time
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 *
 * @property MaintResult $result
 * @property Location $location
 * @property Asset $asset
 * @property MaintSeverity $severity
 */
class MaintAct extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'maint_act';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['department_id', 'category_id', 'location_id', 'asset_id', 'severity_id', 'requested_by', 'responded_by', 'result_id', 'posted_by', 'created_user_id', 'modified_user_id'], 'integer'],
            [['request_time', 'respond_time', 'estimated_due_date', 'posted_time', 'created_time', 'modified_time'], 'safe'],
            [['location_mark', 'request_detail', 'result_detail', 'request_photo', 'result_photo'], 'string'],
            [['job_no'], 'string', 'max' => 20],
            [['contact_name', 'crew_member'], 'string', 'max' => 100],
            [['result_id'], 'exist', 'skipOnError' => true, 'targetClass' => MaintResult::className(), 'targetAttribute' => ['result_id' => 'result_id']],
            [['location_id'], 'exist', 'skipOnError' => true, 'targetClass' => Location::className(), 'targetAttribute' => ['location_id' => 'location_id']],
            [['asset_id'], 'exist', 'skipOnError' => true, 'targetClass' => Asset::className(), 'targetAttribute' => ['asset_id' => 'asset_id']],
            [['severity_id'], 'exist', 'skipOnError' => true, 'targetClass' => MaintSeverity::className(), 'targetAttribute' => ['severity_id' => 'severity_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'job_id' => 'Job ID',
            'job_no' => 'Job No',
            'department_id' => 'Department ID',
            'category_id' => 'Category ID',
            'request_time' => 'Request Time',
            'location_id' => 'Location ID',
            'location_mark' => 'Location Mark',
            'asset_id' => 'Asset ID',
            'contact_name' => 'Contact Name',
            'severity_id' => 'Severity ID',
            'request_detail' => 'Request Detail',
            'requested_by' => 'Requested By',
            'respond_time' => 'Respond Time',
            'responded_by' => 'Responded By',
            'estimated_due_date' => 'Estimated Due Date',
            'result_id' => 'Result ID',
            'result_detail' => 'Result Detail',
            'crew_member' => 'Crew Member',
            'request_photo' => 'Request Photo',
            'result_photo' => 'Result Photo',
            'posted_by' => 'Posted By',
            'posted_time' => 'Posted Time',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
        ];
    }

    /**
     * Gets query for [[Result]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getResult()
    {
        return $this->hasOne(MaintResult::className(), ['result_id' => 'result_id']);
    }

    /**
     * Gets query for [[Location]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLocation()
    {
        return $this->hasOne(Location::className(), ['location_id' => 'location_id']);
    }

    /**
     * Gets query for [[Asset]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAsset()
    {
        return $this->hasOne(Asset::className(), ['asset_id' => 'asset_id']);
    }

    /**
     * Gets query for [[Severity]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSeverity()
    {
        return $this->hasOne(MaintSeverity::className(), ['severity_id' => 'severity_id']);
    }
}
