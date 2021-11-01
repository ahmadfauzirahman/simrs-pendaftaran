<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dept_user".
 *
 * @property int $dept_id
 * @property int $user_id
 *
 * @property ScrtUser $user
 */
class DeptUser extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dept_user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['dept_id', 'user_id'], 'required'],
            [['dept_id', 'user_id'], 'integer'],
            [['dept_id', 'user_id'], 'unique', 'targetAttribute' => ['dept_id', 'user_id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['user_id' => 'user_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'dept_id' => 'Dept ID',
            'user_id' => 'User ID',
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
