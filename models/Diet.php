<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "diet".
 *
 * @property int $diet_id
 * @property int|null $diet_group_id
 * @property string|null $diet_name
 * @property int|null $disabled
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 *
 * @property ScrtUser $createdUser
 * @property ScrtUser $modifiedUser
 * @property FolioDiet[] $folioDiets
 */
class Diet extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'diet';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['diet_group_id', 'disabled', 'created_user_id', 'modified_user_id'], 'integer'],
            [['created_time', 'modified_time'], 'safe'],
            [['diet_name'], 'string', 'max' => 50],
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
            'diet_id' => 'Diet ID',
            'diet_group_id' => 'Diet Group ID',
            'diet_name' => 'Diet Name',
            'disabled' => 'Disabled',
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
     * Gets query for [[FolioDiets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFolioDiets()
    {
        return $this->hasMany(FolioDiet::className(), ['diet_id' => 'diet_id']);
    }
}
