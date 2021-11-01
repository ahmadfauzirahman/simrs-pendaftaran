<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "province".
 *
 * @property int $province_id
 * @property string|null $province_name
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 * @property string|null $province_bpjs_code
 *
 * @property ScrtUser $createdUser
 * @property ScrtUser $modifiedUser
 * @property ReferenceType[] $referenceTypes
 */
class Province extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'province';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_user_id', 'modified_user_id'], 'integer'],
            [['created_time', 'modified_time'], 'safe'],
            [['province_name'], 'string', 'max' => 50],
            [['province_bpjs_code'], 'string', 'max' => 15],
            [['province_name'], 'unique'],
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
            'province_id' => 'Province ID',
            'province_name' => 'Province Name',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
            'province_bpjs_code' => 'Province Bpjs Code',
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
     * Gets query for [[ReferenceTypes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReferenceTypes()
    {
        return $this->hasMany(ReferenceType::className(), ['province_id' => 'province_id']);
    }
}
