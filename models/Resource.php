<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "resource".
 *
 * @property int $resource_id
 * @property string|null $resource_name
 * @property float|null $cost_per_hour
 * @property int|null $res_group_id
 * @property int|null $res_type_id
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 *
 * @property FolioItemRes[] $folioItemRes
 * @property FolioTherapyRes[] $folioTherapyRes
 * @property ItemRes[] $itemRes
 * @property MreceiptRes[] $mreceiptRes
 * @property ResourceGroup $resGroup
 * @property ResourceType $resType
 * @property ScrtUser $createdUser
 * @property ScrtUser $modifiedUser
 */
class Resource extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'resource';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cost_per_hour'], 'number'],
            [['res_group_id', 'res_type_id', 'created_user_id', 'modified_user_id'], 'integer'],
            [['created_time', 'modified_time'], 'safe'],
            [['resource_name'], 'string', 'max' => 50],
            [['resource_name'], 'unique'],
            [['res_group_id'], 'exist', 'skipOnError' => true, 'targetClass' => ResourceGroup::className(), 'targetAttribute' => ['res_group_id' => 'res_group_id']],
            [['res_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => ResourceType::className(), 'targetAttribute' => ['res_type_id' => 'res_type_id']],
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
            'resource_id' => 'Resource ID',
            'resource_name' => 'Resource Name',
            'cost_per_hour' => 'Cost Per Hour',
            'res_group_id' => 'Res Group ID',
            'res_type_id' => 'Res Type ID',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
        ];
    }

    /**
     * Gets query for [[FolioItemRes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFolioItemRes()
    {
        return $this->hasMany(FolioItemRes::className(), ['resource_id' => 'resource_id']);
    }

    /**
     * Gets query for [[FolioTherapyRes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFolioTherapyRes()
    {
        return $this->hasMany(FolioTherapyRes::className(), ['resource_id' => 'resource_id']);
    }

    /**
     * Gets query for [[ItemRes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getItemRes()
    {
        return $this->hasMany(ItemRes::className(), ['resource_id' => 'resource_id']);
    }

    /**
     * Gets query for [[MreceiptRes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMreceiptRes()
    {
        return $this->hasMany(MreceiptRes::className(), ['resource_id' => 'resource_id']);
    }

    /**
     * Gets query for [[ResGroup]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getResGroup()
    {
        return $this->hasOne(ResourceGroup::className(), ['res_group_id' => 'res_group_id']);
    }

    /**
     * Gets query for [[ResType]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getResType()
    {
        return $this->hasOne(ResourceType::className(), ['res_type_id' => 'res_type_id']);
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
