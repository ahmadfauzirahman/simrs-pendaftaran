<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "supervisor".
 *
 * @property int $user_id
 * @property int $supervisor_id
 *
 * @property ScrtUser $user
 * @property ScrtUser $supervisor
 */
class Supervisor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'supervisor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['supervisor_id'], 'required'],
            [['supervisor_id'], 'integer'],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['user_id' => 'user_id']],
            [['supervisor_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['supervisor_id' => 'user_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'supervisor_id' => 'Supervisor ID',
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

    /**
     * Gets query for [[Supervisor]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSupervisor()
    {
        return $this->hasOne(ScrtUser::className(), ['user_id' => 'supervisor_id']);
    }
}
