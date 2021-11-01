<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "n_warehouse".
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
 *
 * @property NInvAdj[] $nInvAdjs
 * @property NInvBalance[] $nInvBalances
 * @property NItem[] $items
 * @property NInvBalanceTmp[] $nInvBalanceTmps
 * @property NInvCount[] $nInvCounts
 * @property NInvHistory[] $nInvHistories
 * @property NInvTransfer[] $nInvTransfers
 * @property NInvTransfer[] $nInvTransfers0
 * @property NPorder[] $nPorders
 * @property NPreceipt[] $nPreceipts
 * @property NPrequest[] $nPrequests
 * @property ScrtUser $createdUser
 * @property ScrtUser $modifiedUser
 */
class NWarehouse extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'n_warehouse';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sales_item', 'purchase_item', 'created_user_id', 'modified_user_id'], 'integer'],
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
        ];
    }

    /**
     * Gets query for [[NInvAdjs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNInvAdjs()
    {
        return $this->hasMany(NInvAdj::className(), ['warehouse_id' => 'warehouse_id']);
    }

    /**
     * Gets query for [[NInvBalances]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNInvBalances()
    {
        return $this->hasMany(NInvBalance::className(), ['warehouse_id' => 'warehouse_id']);
    }

    /**
     * Gets query for [[Items]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getItems()
    {
        return $this->hasMany(NItem::className(), ['item_id' => 'item_id'])->viaTable('n_inv_balance', ['warehouse_id' => 'warehouse_id']);
    }

    /**
     * Gets query for [[NInvBalanceTmps]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNInvBalanceTmps()
    {
        return $this->hasMany(NInvBalanceTmp::className(), ['warehouse_id' => 'warehouse_id']);
    }

    /**
     * Gets query for [[NInvCounts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNInvCounts()
    {
        return $this->hasMany(NInvCount::className(), ['warehouse_id' => 'warehouse_id']);
    }

    /**
     * Gets query for [[NInvHistories]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNInvHistories()
    {
        return $this->hasMany(NInvHistory::className(), ['warehouse_id' => 'warehouse_id']);
    }

    /**
     * Gets query for [[NInvTransfers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNInvTransfers()
    {
        return $this->hasMany(NInvTransfer::className(), ['source_wh_id' => 'warehouse_id']);
    }

    /**
     * Gets query for [[NInvTransfers0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNInvTransfers0()
    {
        return $this->hasMany(NInvTransfer::className(), ['destination_wh_id' => 'warehouse_id']);
    }

    /**
     * Gets query for [[NPorders]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNPorders()
    {
        return $this->hasMany(NPorder::className(), ['warehouse_id' => 'warehouse_id']);
    }

    /**
     * Gets query for [[NPreceipts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNPreceipts()
    {
        return $this->hasMany(NPreceipt::className(), ['warehouse_id' => 'warehouse_id']);
    }

    /**
     * Gets query for [[NPrequests]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNPrequests()
    {
        return $this->hasMany(NPrequest::className(), ['warehouse_id' => 'warehouse_id']);
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
