<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "status_actv_mntn".
 *
 * @property int $status_id
 * @property string|null $status_name
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 *
 * @property ActivityMntnc[] $activityMntncs
 */
class StatusActvMntn extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'status_actv_mntn';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status_id'], 'required'],
            [['status_id', 'created_user_id', 'modified_user_id'], 'integer'],
            [['created_time', 'modified_time'], 'safe'],
            [['status_name'], 'string', 'max' => 30],
            [['status_name'], 'unique'],
            [['status_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'status_id' => 'Status ID',
            'status_name' => 'Status Name',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
        ];
    }

    /**
     * Gets query for [[ActivityMntncs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getActivityMntncs()
    {
        return $this->hasMany(ActivityMntnc::className(), ['status' => 'status_id']);
    }
}
