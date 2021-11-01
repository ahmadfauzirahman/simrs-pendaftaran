<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "staff_type".
 *
 * @property int $staff_type_id
 * @property string|null $type_name
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 *
 * @property FolioStaff[] $folioStaff
 * @property Staff[] $staff
 * @property ScrtUser $createdUser
 * @property ScrtUser $modifiedUser
 * @property SubUnitStaff[] $subUnitStaff
 */
class StaffType extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'staff_type';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_user_id', 'modified_user_id'], 'integer'],
            [['created_time', 'modified_time'], 'safe'],
            [['type_name'], 'string', 'max' => 50],
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
            'staff_type_id' => 'Staff Type ID',
            'type_name' => 'Type Name',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
        ];
    }

    /**
     * Gets query for [[FolioStaff]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFolioStaff()
    {
        return $this->hasMany(FolioStaff::className(), ['staff_type_id' => 'staff_type_id']);
    }

    /**
     * Gets query for [[Staff]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStaff()
    {
        return $this->hasMany(Staff::className(), ['staff_type_id' => 'staff_type_id']);
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
     * Gets query for [[SubUnitStaff]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSubUnitStaff()
    {
        return $this->hasMany(SubUnitStaff::className(), ['staff_type_id' => 'staff_type_id']);
    }
}
