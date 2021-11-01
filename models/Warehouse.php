<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "warehouse".
 *
 * @property int $warehouse_id
 * @property string|null $warehouse_name
 * @property string|null $address_line1
 * @property string|null $address_line2
 * @property string|null $address_line3
 * @property string|null $address_line4
 * @property string|null $phone
 * @property string|null $contact_person
 * @property int|null $sales_item
 * @property int|null $purchase_item
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 * @property int|null $id_balance
 *
 * @property ArInv[] $arInvs
 * @property ArSetup[] $arSetups
 * @property ArSetup[] $arSetups0
 * @property AssetMv[] $assetMvs
 * @property InvAdj[] $invAdjs
 * @property InvBalance[] $invBalances
 * @property Item[] $items
 * @property InvBalanceTmp[] $invBalanceTmps
 * @property InvCount[] $invCounts
 * @property InvHistory[] $invHistories
 * @property InvTransfer[] $invTransfers
 * @property InvTransfer[] $invTransfers0
 * @property ItemOutForSo[] $itemOutForSos
 * @property Item[] $items0
 * @property Morder[] $morders
 * @property Mreceipt[] $mreceipts
 * @property Porder[] $porders
 * @property Preceipt[] $preceipts
 * @property SalesSetup[] $salesSetups
 * @property Shipment[] $shipments
 * @property SubUnit[] $subUnits
 * @property ScrtUser $createdUser
 * @property ScrtUser $modifiedUser
 * @property WarehouseItem[] $warehouseItems
 * @property Item[] $items1
 */
class Warehouse extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'warehouse';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sales_item', 'purchase_item', 'created_user_id', 'modified_user_id', 'id_balance'], 'integer'],
            [['created_time', 'modified_time'], 'safe'],
            [['warehouse_name', 'address_line1', 'address_line2', 'address_line3', 'address_line4'], 'string', 'max' => 50],
            [['phone', 'contact_person'], 'string', 'max' => 30],
            [['warehouse_name'], 'unique'],
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
            'warehouse_id' => 'Warehouse ID',
            'warehouse_name' => 'Warehouse Name',
            'address_line1' => 'Address Line1',
            'address_line2' => 'Address Line2',
            'address_line3' => 'Address Line3',
            'address_line4' => 'Address Line4',
            'phone' => 'Phone',
            'contact_person' => 'Contact Person',
            'sales_item' => 'Sales Item',
            'purchase_item' => 'Purchase Item',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
            'id_balance' => 'Id Balance',
        ];
    }

    /**
     * Gets query for [[ArInvs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getArInvs()
    {
        return $this->hasMany(ArInv::className(), ['warehouse_id' => 'warehouse_id']);
    }

    /**
     * Gets query for [[ArSetups]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getArSetups()
    {
        return $this->hasMany(ArSetup::className(), ['return_warehouse_id' => 'warehouse_id']);
    }

    /**
     * Gets query for [[ArSetups0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getArSetups0()
    {
        return $this->hasMany(ArSetup::className(), ['invoice_warehouse_id' => 'warehouse_id']);
    }

    /**
     * Gets query for [[AssetMvs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAssetMvs()
    {
        return $this->hasMany(AssetMv::className(), ['warehouse_id' => 'warehouse_id']);
    }

    /**
     * Gets query for [[InvAdjs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInvAdjs()
    {
        return $this->hasMany(InvAdj::className(), ['warehouse_id' => 'warehouse_id']);
    }

    /**
     * Gets query for [[InvBalances]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInvBalances()
    {
        return $this->hasMany(InvBalance::className(), ['warehouse_id' => 'warehouse_id']);
    }

    /**
     * Gets query for [[Items]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getItems()
    {
        return $this->hasMany(Item::className(), ['item_id' => 'item_id'])->viaTable('inv_balance', ['warehouse_id' => 'warehouse_id']);
    }

    /**
     * Gets query for [[InvBalanceTmps]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInvBalanceTmps()
    {
        return $this->hasMany(InvBalanceTmp::className(), ['warehouse_id' => 'warehouse_id']);
    }

    /**
     * Gets query for [[InvCounts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInvCounts()
    {
        return $this->hasMany(InvCount::className(), ['warehouse_id' => 'warehouse_id']);
    }

    /**
     * Gets query for [[InvHistories]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInvHistories()
    {
        return $this->hasMany(InvHistory::className(), ['warehouse_id' => 'warehouse_id']);
    }

    /**
     * Gets query for [[InvTransfers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInvTransfers()
    {
        return $this->hasMany(InvTransfer::className(), ['source_wh_id' => 'warehouse_id']);
    }

    /**
     * Gets query for [[InvTransfers0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInvTransfers0()
    {
        return $this->hasMany(InvTransfer::className(), ['destination_wh_id' => 'warehouse_id']);
    }

    /**
     * Gets query for [[ItemOutForSos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getItemOutForSos()
    {
        return $this->hasMany(ItemOutForSo::className(), ['warehouse_id' => 'warehouse_id']);
    }

    /**
     * Gets query for [[Items0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getItems0()
    {
        return $this->hasMany(Item::className(), ['item_id' => 'item_id'])->viaTable('item_out_for_so', ['warehouse_id' => 'warehouse_id']);
    }

    /**
     * Gets query for [[Morders]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMorders()
    {
        return $this->hasMany(Morder::className(), ['warehouse_id' => 'warehouse_id']);
    }

    /**
     * Gets query for [[Mreceipts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMreceipts()
    {
        return $this->hasMany(Mreceipt::className(), ['warehouse_id' => 'warehouse_id']);
    }

    /**
     * Gets query for [[Porders]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPorders()
    {
        return $this->hasMany(Porder::className(), ['warehouse_id' => 'warehouse_id']);
    }

    /**
     * Gets query for [[Preceipts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPreceipts()
    {
        return $this->hasMany(Preceipt::className(), ['warehouse_id' => 'warehouse_id']);
    }

    /**
     * Gets query for [[SalesSetups]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSalesSetups()
    {
        return $this->hasMany(SalesSetup::className(), ['shipment_warehouse_id' => 'warehouse_id']);
    }

    /**
     * Gets query for [[Shipments]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getShipments()
    {
        return $this->hasMany(Shipment::className(), ['warehouse_id' => 'warehouse_id']);
    }

    /**
     * Gets query for [[SubUnits]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSubUnits()
    {
        return $this->hasMany(SubUnit::className(), ['warehouse_id' => 'warehouse_id']);
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
     * Gets query for [[WarehouseItems]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getWarehouseItems()
    {
        return $this->hasMany(WarehouseItem::className(), ['warehouse_id' => 'warehouse_id']);
    }

    /**
     * Gets query for [[Items1]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getItems1()
    {
        return $this->hasMany(Item::className(), ['item_id' => 'item_id'])->viaTable('warehouse_item', ['warehouse_id' => 'warehouse_id']);
    }
}
