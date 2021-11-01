<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "carrier".
 *
 * @property int $carrier_id
 * @property string|null $carrier_name
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 *
 * @property ScrtUser $createdUser
 * @property ScrtUser $modifiedUser
 * @property Customer[] $customers
 * @property NPorder[] $nPorders
 * @property Porder[] $porders
 * @property SalesSetup[] $salesSetups
 * @property Shipment[] $shipments
 * @property Sorder[] $sorders
 * @property Vendor[] $vendors
 */
class Carrier extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'carrier';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_user_id', 'modified_user_id'], 'integer'],
            [['created_time', 'modified_time'], 'safe'],
            [['carrier_name'], 'string', 'max' => 30],
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
            'carrier_id' => 'Carrier ID',
            'carrier_name' => 'Carrier Name',
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
     * Gets query for [[Customers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCustomers()
    {
        return $this->hasMany(Customer::className(), ['carrier_id' => 'carrier_id']);
    }

    /**
     * Gets query for [[NPorders]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNPorders()
    {
        return $this->hasMany(NPorder::className(), ['carrier_id' => 'carrier_id']);
    }

    /**
     * Gets query for [[Porders]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPorders()
    {
        return $this->hasMany(Porder::className(), ['carrier_id' => 'carrier_id']);
    }

    /**
     * Gets query for [[SalesSetups]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSalesSetups()
    {
        return $this->hasMany(SalesSetup::className(), ['shipment_carrier_id' => 'carrier_id']);
    }

    /**
     * Gets query for [[Shipments]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getShipments()
    {
        return $this->hasMany(Shipment::className(), ['carrier_id' => 'carrier_id']);
    }

    /**
     * Gets query for [[Sorders]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSorders()
    {
        return $this->hasMany(Sorder::className(), ['carrier_id' => 'carrier_id']);
    }

    /**
     * Gets query for [[Vendors]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getVendors()
    {
        return $this->hasMany(Vendor::className(), ['carrier_id' => 'carrier_id']);
    }
}
