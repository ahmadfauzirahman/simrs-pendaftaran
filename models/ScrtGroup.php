<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "scrt_group".
 *
 * @property int $group_id
 * @property string|null $group_name
 * @property int|null $policy_id
 * @property int|null $active
 * @property string|null $description
 * @property int|null $built_in
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 *
 * @property ReportAccess[] $reportAccesses
 * @property ScrtPolicy $policy
 * @property ScrtUser[] $scrtUsers
 */
class ScrtGroup extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'scrt_group';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['policy_id', 'active', 'built_in', 'created_user_id', 'modified_user_id'], 'integer'],
            [['created_time', 'modified_time'], 'safe'],
            [['group_name'], 'string', 'max' => 30],
            [['description'], 'string', 'max' => 100],
            [['policy_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtPolicy::className(), 'targetAttribute' => ['policy_id' => 'policy_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'group_id' => 'Group ID',
            'group_name' => 'Group Name',
            'policy_id' => 'Policy ID',
            'active' => 'Active',
            'description' => 'Description',
            'built_in' => 'Built In',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
        ];
    }

    /**
     * Gets query for [[ReportAccesses]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReportAccesses()
    {
        return $this->hasMany(ReportAccess::className(), ['group_id' => 'group_id']);
    }

    /**
     * Gets query for [[Policy]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPolicy()
    {
        return $this->hasOne(ScrtPolicy::className(), ['policy_id' => 'policy_id']);
    }

    /**
     * Gets query for [[ScrtUsers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getScrtUsers()
    {
        return $this->hasMany(ScrtUser::className(), ['group_id' => 'group_id']);
    }
}
