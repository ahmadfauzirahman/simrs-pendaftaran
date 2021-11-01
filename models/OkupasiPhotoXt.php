<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "okupasi_photo_xt".
 *
 * @property int $okup_id
 * @property string|null $notes
 * @property string|null $location
 * @property string|null $target
 * @property string|null $view_location
 * @property int|null $validation
 * @property int|null $created_user_id
 * @property string|null $created_time
 *
 * @property OkupasiXt $okup
 * @property ScrtUser $createdUser
 */
class OkupasiPhotoXt extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'okupasi_photo_xt';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['okup_id'], 'required'],
            [['okup_id', 'validation', 'created_user_id'], 'integer'],
            [['notes', 'location', 'target', 'view_location'], 'string'],
            [['created_time'], 'safe'],
            [['okup_id'], 'unique'],
            [['okup_id'], 'exist', 'skipOnError' => true, 'targetClass' => OkupasiXt::className(), 'targetAttribute' => ['okup_id' => 'okup_id']],
            [['created_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['created_user_id' => 'user_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'okup_id' => 'Okup ID',
            'notes' => 'Notes',
            'location' => 'Location',
            'target' => 'Target',
            'view_location' => 'View Location',
            'validation' => 'Validation',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
        ];
    }

    /**
     * Gets query for [[Okup]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOkup()
    {
        return $this->hasOne(OkupasiXt::className(), ['okup_id' => 'okup_id']);
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
}
