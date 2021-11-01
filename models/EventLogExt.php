<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "event_log_ext".
 *
 * @property int $event_log_id
 * @property int|null $user_id
 * @property string|null $event_time
 * @property string|null $description
 * @property string|null $form_name
 *
 * @property ScrtUser $user
 */
class EventLogExt extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'event_log_ext';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id'], 'integer'],
            [['event_time'], 'safe'],
            [['description'], 'string', 'max' => 255],
            [['form_name'], 'string', 'max' => 30],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['user_id' => 'user_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'event_log_id' => 'Event Log ID',
            'user_id' => 'User ID',
            'event_time' => 'Event Time',
            'description' => 'Description',
            'form_name' => 'Form Name',
        ];
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(ScrtUser::className(), ['user_id' => 'user_id']);
    }
}
