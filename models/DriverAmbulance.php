<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "driver_ambulance".
 *
 * @property int $driver_id
 * @property string|null $driver_name
 * @property int|null $driver_type
 * @property int|null $ambulance_id
 * @property string|null $phone
 * @property int|null $disabled
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 *
 * @property FeeAmbulance[] $feeAmbulances
 */
class DriverAmbulance extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'driver_ambulance';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['driver_id'], 'required'],
            [['driver_id', 'driver_type', 'ambulance_id', 'disabled', 'created_user_id', 'modified_user_id'], 'integer'],
            [['created_time', 'modified_time'], 'safe'],
            [['driver_name'], 'string', 'max' => 50],
            [['phone'], 'string', 'max' => 30],
            [['driver_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'driver_id' => 'Driver ID',
            'driver_name' => 'Driver Name',
            'driver_type' => 'Driver Type',
            'ambulance_id' => 'Ambulance ID',
            'phone' => 'Phone',
            'disabled' => 'Disabled',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
        ];
    }

    /**
     * Gets query for [[FeeAmbulances]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFeeAmbulances()
    {
        return $this->hasMany(FeeAmbulance::className(), ['driver_id' => 'driver_id']);
    }
}
