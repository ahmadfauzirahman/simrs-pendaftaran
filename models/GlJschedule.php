<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gl_jschedule".
 *
 * @property int $jschedule_id
 * @property string|null $schedule_name
 * @property int|null $journal_type_id
 * @property string|null $from_date
 * @property string|null $to_date
 * @property string|null $description
 * @property int|null $posted
 * @property int|null $auto_post
 * @property int|null $created_user_id
 * @property string $created_time
 * @property int|null $modified_user_id
 * @property string $modified_time
 *
 * @property ScrtUser $createdUser
 * @property ScrtUser $modifiedUser
 * @property GlJscheduleDet[] $glJscheduleDets
 */
class GlJschedule extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'gl_jschedule';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['journal_type_id', 'posted', 'auto_post', 'created_user_id', 'modified_user_id'], 'integer'],
            [['from_date', 'to_date', 'created_time', 'modified_time'], 'safe'],
            [['schedule_name'], 'string', 'max' => 30],
            [['description'], 'string', 'max' => 100],
            [['created_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['created_user_id' => 'user_id']],
            [['modified_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['modified_user_id' => 'user_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'jschedule_id' => 'Jschedule ID',
            'schedule_name' => 'Schedule Name',
            'journal_type_id' => 'Journal Type ID',
            'from_date' => 'From Date',
            'to_date' => 'To Date',
            'description' => 'Description',
            'posted' => 'Posted',
            'auto_post' => 'Auto Post',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
        ];
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
     * Gets query for [[GlJscheduleDets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGlJscheduleDets()
    {
        return $this->hasMany(GlJscheduleDet::className(), ['jschedule_id' => 'jschedule_id']);
    }
}
