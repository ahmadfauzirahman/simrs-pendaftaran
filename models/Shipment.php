<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "shipment".
 *
 * @property int $shipment_id
 * @property string|null $shipment_no
 * @property string|null $shipment_date
 * @property int|null $customer_id
 * @property int|null $order_id
 * @property string|null $order_no
 * @property int|null $warehouse_id
 * @property int|null $shipment_type
 * @property int|null $carrier_id
 * @property string|null $shipto_name
 * @property string|null $shipto_address
 * @property float|null $freight_cost
 * @property int|null $posted
 * @property int|null $printed
 * @property string|null $notes
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 *
 * @property Customer $customer
 * @property Sorder $order
 * @property Warehouse $warehouse
 * @property Carrier $carrier
 * @property ScrtUser $createdUser
 * @property ScrtUser $modifiedUser
 * @property ShipmentDet[] $shipmentDets
 */
class Shipment extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'shipment';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['shipment_id'], 'required'],
            [['shipment_id', 'customer_id', 'order_id', 'warehouse_id', 'shipment_type', 'carrier_id', 'posted', 'printed', 'created_user_id', 'modified_user_id'], 'integer'],
            [['shipment_date', 'created_time', 'modified_time'], 'safe'],
            [['shipto_address', 'notes'], 'string'],
            [['freight_cost'], 'number'],
            [['shipment_no', 'order_no'], 'string', 'max' => 20],
            [['shipto_name'], 'string', 'max' => 50],
            [['shipment_id'], 'unique'],
            [['customer_id'], 'exist', 'skipOnError' => true, 'targetClass' => Customer::className(), 'targetAttribute' => ['customer_id' => 'customer_id']],
            [['order_id'], 'exist', 'skipOnError' => true, 'targetClass' => Sorder::className(), 'targetAttribute' => ['order_id' => 'order_id']],
            [['warehouse_id'], 'exist', 'skipOnError' => true, 'targetClass' => Warehouse::className(), 'targetAttribute' => ['warehouse_id' => 'warehouse_id']],
            [['carrier_id'], 'exist', 'skipOnError' => true, 'targetClass' => Carrier::className(), 'targetAttribute' => ['carrier_id' => 'carrier_id']],
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
            'shipment_id' => 'Shipment ID',
            'shipment_no' => 'Shipment No',
            'shipment_date' => 'Shipment Date',
            'customer_id' => 'Customer ID',
            'order_id' => 'Order ID',
            'order_no' => 'Order No',
            'warehouse_id' => 'Warehouse ID',
            'shipment_type' => 'Shipment Type',
            'carrier_id' => 'Carrier ID',
            'shipto_name' => 'Shipto Name',
            'shipto_address' => 'Shipto Address',
            'freight_cost' => 'Freight Cost',
            'posted' => 'Posted',
            'printed' => 'Printed',
            'notes' => 'Notes',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
        ];
    }

    /**
     * Gets query for [[Customer]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCustomer()
    {
        return $this->hasOne(Customer::className(), ['customer_id' => 'customer_id']);
    }

    /**
     * Gets query for [[Order]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrder()
    {
        return $this->hasOne(Sorder::className(), ['order_id' => 'order_id']);
    }

    /**
     * Gets query for [[Warehouse]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getWarehouse()
    {
        return $this->hasOne(Warehouse::className(), ['warehouse_id' => 'warehouse_id']);
    }

    /**
     * Gets query for [[Carrier]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCarrier()
    {
        return $this->hasOne(Carrier::className(), ['carrier_id' => 'carrier_id']);
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
     * Gets query for [[ShipmentDets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getShipmentDets()
    {
        return $this->hasMany(ShipmentDet::className(), ['shipment_id' => 'shipment_id']);
    }
}
