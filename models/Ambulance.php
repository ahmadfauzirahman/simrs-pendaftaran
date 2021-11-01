<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ambulance".
 *
 * @property int $ambulance_id
 * @property string|null $ambulance_name
 * @property string|null $plat_nomor
 * @property string|null $address_line
 * @property string|null $city
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_user_time
 * @property int|null $disabled
 *
 * @property FeeAmbulance[] $feeAmbulances
 */
class Ambulance extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ambulance';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ambulance_id'], 'required'],
            [['ambulance_id', 'created_user_id', 'modified_user_id', 'disabled'], 'integer'],
            [['created_time', 'modified_user_time'], 'safe'],
            [['ambulance_name', 'address_line'], 'string', 'max' => 50],
            [['plat_nomor'], 'string', 'max' => 20],
            [['city'], 'string', 'max' => 30],
            [['ambulance_name'], 'unique'],
            [['ambulance_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ambulance_id' => 'Ambulance ID',
            'ambulance_name' => 'Ambulance Name',
            'plat_nomor' => 'Plat Nomor',
            'address_line' => 'Address Line',
            'city' => 'City',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_user_time' => 'Modified User Time',
            'disabled' => 'Disabled',
        ];
    }

    /**
     * Gets query for [[FeeAmbulances]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFeeAmbulances()
    {
        return $this->hasMany(FeeAmbulance::className(), ['ambulance_id' => 'ambulance_id']);
    }
}
