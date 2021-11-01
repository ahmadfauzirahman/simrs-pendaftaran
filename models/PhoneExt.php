<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "phone_ext".
 *
 * @property int $phone_id
 * @property string|null $phone_name
 * @property int|null $phone_type
 * @property string|null $specialist
 * @property string|null $cp
 * @property string|null $phone_bintang
 * @property string|null $phone_number
 * @property string|null $phone_desc
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 * @property int|null $disabled
 *
 * @property ScrtUser $createdUser
 * @property ScrtUser $modifiedUser
 */
class PhoneExt extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'phone_ext';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['phone_type', 'created_user_id', 'modified_user_id', 'disabled'], 'integer'],
            [['created_time', 'modified_time'], 'safe'],
            [['phone_name', 'specialist', 'cp', 'phone_desc'], 'string', 'max' => 70],
            [['phone_bintang'], 'string', 'max' => 20],
            [['phone_number'], 'string', 'max' => 50],
            [['phone_bintang'], 'unique'],
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
            'phone_id' => 'Phone ID',
            'phone_name' => 'Phone Name',
            'phone_type' => 'Phone Type',
            'specialist' => 'Specialist',
            'cp' => 'Cp',
            'phone_bintang' => 'Phone Bintang',
            'phone_number' => 'Phone Number',
            'phone_desc' => 'Phone Desc',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
            'disabled' => 'Disabled',
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
}
