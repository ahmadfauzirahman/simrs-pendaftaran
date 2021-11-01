<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "location".
 *
 * @property int $location_id
 * @property string|null $location_name
 * @property string|null $address_line1
 * @property string|null $address_line2
 * @property string|null $phone
 * @property string|null $floorplan
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 *
 * @property Asset[] $assets
 * @property ScrtUser $createdUser
 * @property ScrtUser $modifiedUser
 * @property MaintAct[] $maintActs
 * @property SubUnit[] $subUnits
 */
class Location extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'location';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['floorplan'], 'string'],
            [['created_user_id', 'modified_user_id'], 'integer'],
            [['created_time', 'modified_time'], 'safe'],
            [['location_name', 'address_line1', 'address_line2'], 'string', 'max' => 50],
            [['phone'], 'string', 'max' => 30],
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
            'location_id' => 'Location ID',
            'location_name' => 'Location Name',
            'address_line1' => 'Address Line1',
            'address_line2' => 'Address Line2',
            'phone' => 'Phone',
            'floorplan' => 'Floorplan',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
        ];
    }

    /**
     * Gets query for [[Assets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAssets()
    {
        return $this->hasMany(Asset::className(), ['location_id' => 'location_id']);
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
     * Gets query for [[MaintActs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMaintActs()
    {
        return $this->hasMany(MaintAct::className(), ['location_id' => 'location_id']);
    }

    /**
     * Gets query for [[SubUnits]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSubUnits()
    {
        return $this->hasMany(SubUnit::className(), ['location_id' => 'location_id']);
    }
}
