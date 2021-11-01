<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "n_item".
 *
 * @property int $item_id
 * @property string|null $item_no
 * @property string|null $item_name
 * @property int|null $item_type_id
 * @property int|null $item_group_id
 * @property int|null $uom_id
 * @property int|null $sales_item
 * @property int|null $purchase_item
 * @property int|null $wip_item
 * @property float|null $minimum_qty
 * @property float|null $safety_level
 * @property float|null $economic_order_qty
 * @property float|null $unit_weight
 * @property float|null $qty_per_batch
 * @property int|null $material_per_batch
 * @property int|null $disabled
 * @property int|null $backorderable
 * @property float|null $unit_price
 * @property float|null $unit_discount
 * @property float|null $fixed_cost
 * @property float|null $wgt_avg_cost
 * @property int|null $col_staff_enabled
 * @property int|null $sales_gl_acc_id
 * @property int|null $sales_disc_gl_acc_id
 * @property int|null $inventory_gl_acc_id
 * @property int|null $cogs_gl_acc_id
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 * @property string|null $notes
 * @property string|null $lab_exam_mtd
 * @property int|null $sales_tax1_id
 * @property int|null $sales_tax2_id
 * @property int|null $sales_tax3_id
 * @property int|null $purchase_tax1_id
 * @property int|null $purchase_tax2_id
 * @property int|null $purchase_tax3_id
 * @property int|null $price_define
 * @property float|null $markup_pc
 * @property int|null $price_value
 * @property int|null $sales_ret_gl_acc_id
 * @property int|null $pharm_formula_editable
 * @property int|null $item_category
 * @property int|null $laboratory
 * @property int|null $dist_sales
 * @property int|null $enable_auto_charge
 * @property int|null $ac_occurence
 * @property int|null $ac_limit_app
 * @property int|null $ac_limit_num_of_app
 * @property string|null $ac_evaluate_time
 * @property float|null $ac_round_to
 * @property float|null $ac_round_offset
 * @property int|null $therapy
 * @property int|null $vendor_id
 * @property float|null $last_purchase_price
 * @property float|null $last_purchase_disc_pc
 * @property string|null $manufacturer
 * @property string|null $formula
 * @property string|null $warna
 * @property string|null $sediaan
 * @property string|null $gol_ims
 * @property string|null $subgol_ims
 * @property string|null $kel_therapi
 * @property string|null $carapakai
 * @property string|null $kategori1
 * @property string|null $kategori2
 * @property string|null $kategori3
 * @property string|null $kategori4
 * @property string|null $kategori5
 * @property string|null $photo
 *
 * @property NInvAdjDet[] $nInvAdjDets
 * @property NInvBalance[] $nInvBalances
 * @property NWarehouse[] $warehouses
 * @property NInvBalanceTmp[] $nInvBalanceTmps
 * @property NInvCountDet[] $nInvCountDets
 * @property NInvHistory[] $nInvHistories
 * @property NInvTransferDet[] $nInvTransferDets
 * @property Tax $salesTax2
 * @property Tax $purchaseTax1
 * @property Tax $purchaseTax2
 * @property Tax $purchaseTax3
 * @property GlAccount $salesRetGlAcc
 * @property ScrtUser $createdUser
 * @property ScrtUser $modifiedUser
 * @property Tax $salesTax1
 * @property Vendor $vendor
 * @property NItemType $itemType
 * @property NItemGroup $itemGroup
 * @property GlAccount $salesGlAcc
 * @property GlAccount $salesDiscGlAcc
 * @property GlAccount $inventoryGlAcc
 * @property GlAccount $cogsGlAcc
 * @property NUom $uom
 * @property Tax $salesTax3
 * @property NPorderDet[] $nPorderDets
 * @property NPreceiptDet[] $nPreceiptDets
 */
class NItem extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'n_item';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['item_id'], 'required'],
            [['item_id', 'item_type_id', 'item_group_id', 'uom_id', 'sales_item', 'purchase_item', 'wip_item', 'material_per_batch', 'disabled', 'backorderable', 'col_staff_enabled', 'sales_gl_acc_id', 'sales_disc_gl_acc_id', 'inventory_gl_acc_id', 'cogs_gl_acc_id', 'created_user_id', 'modified_user_id', 'sales_tax1_id', 'sales_tax2_id', 'sales_tax3_id', 'purchase_tax1_id', 'purchase_tax2_id', 'purchase_tax3_id', 'price_define', 'price_value', 'sales_ret_gl_acc_id', 'pharm_formula_editable', 'item_category', 'laboratory', 'dist_sales', 'enable_auto_charge', 'ac_occurence', 'ac_limit_app', 'ac_limit_num_of_app', 'therapy', 'vendor_id'], 'integer'],
            [['minimum_qty', 'safety_level', 'economic_order_qty', 'unit_weight', 'qty_per_batch', 'unit_price', 'unit_discount', 'fixed_cost', 'wgt_avg_cost', 'markup_pc', 'ac_round_to', 'ac_round_offset', 'last_purchase_price', 'last_purchase_disc_pc'], 'number'],
            [['created_time', 'modified_time', 'ac_evaluate_time'], 'safe'],
            [['notes', 'lab_exam_mtd', 'photo'], 'string'],
            [['item_no'], 'string', 'max' => 20],
            [['item_name'], 'string', 'max' => 100],
            [['manufacturer', 'formula', 'warna', 'sediaan', 'gol_ims', 'subgol_ims', 'kel_therapi', 'carapakai', 'kategori1', 'kategori2', 'kategori3', 'kategori4', 'kategori5'], 'string', 'max' => 50],
            [['item_no'], 'unique'],
            [['item_name'], 'unique'],
            [['item_id'], 'unique'],
            [['sales_tax2_id'], 'exist', 'skipOnError' => true, 'targetClass' => Tax::className(), 'targetAttribute' => ['sales_tax2_id' => 'tax_id']],
            [['purchase_tax1_id'], 'exist', 'skipOnError' => true, 'targetClass' => Tax::className(), 'targetAttribute' => ['purchase_tax1_id' => 'tax_id']],
            [['purchase_tax2_id'], 'exist', 'skipOnError' => true, 'targetClass' => Tax::className(), 'targetAttribute' => ['purchase_tax2_id' => 'tax_id']],
            [['purchase_tax3_id'], 'exist', 'skipOnError' => true, 'targetClass' => Tax::className(), 'targetAttribute' => ['purchase_tax3_id' => 'tax_id']],
            [['sales_ret_gl_acc_id'], 'exist', 'skipOnError' => true, 'targetClass' => GlAccount::className(), 'targetAttribute' => ['sales_ret_gl_acc_id' => 'account_id']],
            [['created_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['created_user_id' => 'user_id']],
            [['modified_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['modified_user_id' => 'user_id']],
            [['sales_tax1_id'], 'exist', 'skipOnError' => true, 'targetClass' => Tax::className(), 'targetAttribute' => ['sales_tax1_id' => 'tax_id']],
            [['vendor_id'], 'exist', 'skipOnError' => true, 'targetClass' => Vendor::className(), 'targetAttribute' => ['vendor_id' => 'vendor_id']],
            [['item_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => NItemType::className(), 'targetAttribute' => ['item_type_id' => 'item_type_id']],
            [['item_group_id'], 'exist', 'skipOnError' => true, 'targetClass' => NItemGroup::className(), 'targetAttribute' => ['item_group_id' => 'item_group_id']],
            [['sales_gl_acc_id'], 'exist', 'skipOnError' => true, 'targetClass' => GlAccount::className(), 'targetAttribute' => ['sales_gl_acc_id' => 'account_id']],
            [['sales_disc_gl_acc_id'], 'exist', 'skipOnError' => true, 'targetClass' => GlAccount::className(), 'targetAttribute' => ['sales_disc_gl_acc_id' => 'account_id']],
            [['inventory_gl_acc_id'], 'exist', 'skipOnError' => true, 'targetClass' => GlAccount::className(), 'targetAttribute' => ['inventory_gl_acc_id' => 'account_id']],
            [['cogs_gl_acc_id'], 'exist', 'skipOnError' => true, 'targetClass' => GlAccount::className(), 'targetAttribute' => ['cogs_gl_acc_id' => 'account_id']],
            [['uom_id'], 'exist', 'skipOnError' => true, 'targetClass' => NUom::className(), 'targetAttribute' => ['uom_id' => 'uom_id']],
            [['sales_tax3_id'], 'exist', 'skipOnError' => true, 'targetClass' => Tax::className(), 'targetAttribute' => ['sales_tax3_id' => 'tax_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'item_id' => 'Item ID',
            'item_no' => 'Item No',
            'item_name' => 'Item Name',
            'item_type_id' => 'Item Type ID',
            'item_group_id' => 'Item Group ID',
            'uom_id' => 'Uom ID',
            'sales_item' => 'Sales Item',
            'purchase_item' => 'Purchase Item',
            'wip_item' => 'Wip Item',
            'minimum_qty' => 'Minimum Qty',
            'safety_level' => 'Safety Level',
            'economic_order_qty' => 'Economic Order Qty',
            'unit_weight' => 'Unit Weight',
            'qty_per_batch' => 'Qty Per Batch',
            'material_per_batch' => 'Material Per Batch',
            'disabled' => 'Disabled',
            'backorderable' => 'Backorderable',
            'unit_price' => 'Unit Price',
            'unit_discount' => 'Unit Discount',
            'fixed_cost' => 'Fixed Cost',
            'wgt_avg_cost' => 'Wgt Avg Cost',
            'col_staff_enabled' => 'Col Staff Enabled',
            'sales_gl_acc_id' => 'Sales Gl Acc ID',
            'sales_disc_gl_acc_id' => 'Sales Disc Gl Acc ID',
            'inventory_gl_acc_id' => 'Inventory Gl Acc ID',
            'cogs_gl_acc_id' => 'Cogs Gl Acc ID',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
            'notes' => 'Notes',
            'lab_exam_mtd' => 'Lab Exam Mtd',
            'sales_tax1_id' => 'Sales Tax1 ID',
            'sales_tax2_id' => 'Sales Tax2 ID',
            'sales_tax3_id' => 'Sales Tax3 ID',
            'purchase_tax1_id' => 'Purchase Tax1 ID',
            'purchase_tax2_id' => 'Purchase Tax2 ID',
            'purchase_tax3_id' => 'Purchase Tax3 ID',
            'price_define' => 'Price Define',
            'markup_pc' => 'Markup Pc',
            'price_value' => 'Price Value',
            'sales_ret_gl_acc_id' => 'Sales Ret Gl Acc ID',
            'pharm_formula_editable' => 'Pharm Formula Editable',
            'item_category' => 'Item Category',
            'laboratory' => 'Laboratory',
            'dist_sales' => 'Dist Sales',
            'enable_auto_charge' => 'Enable Auto Charge',
            'ac_occurence' => 'Ac Occurence',
            'ac_limit_app' => 'Ac Limit App',
            'ac_limit_num_of_app' => 'Ac Limit Num Of App',
            'ac_evaluate_time' => 'Ac Evaluate Time',
            'ac_round_to' => 'Ac Round To',
            'ac_round_offset' => 'Ac Round Offset',
            'therapy' => 'Therapy',
            'vendor_id' => 'Vendor ID',
            'last_purchase_price' => 'Last Purchase Price',
            'last_purchase_disc_pc' => 'Last Purchase Disc Pc',
            'manufacturer' => 'Manufacturer',
            'formula' => 'Formula',
            'warna' => 'Warna',
            'sediaan' => 'Sediaan',
            'gol_ims' => 'Gol Ims',
            'subgol_ims' => 'Subgol Ims',
            'kel_therapi' => 'Kel Therapi',
            'carapakai' => 'Carapakai',
            'kategori1' => 'Kategori1',
            'kategori2' => 'Kategori2',
            'kategori3' => 'Kategori3',
            'kategori4' => 'Kategori4',
            'kategori5' => 'Kategori5',
            'photo' => 'Photo',
        ];
    }

    /**
     * Gets query for [[NInvAdjDets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNInvAdjDets()
    {
        return $this->hasMany(NInvAdjDet::className(), ['item_id' => 'item_id']);
    }

    /**
     * Gets query for [[NInvBalances]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNInvBalances()
    {
        return $this->hasMany(NInvBalance::className(), ['item_id' => 'item_id']);
    }

    /**
     * Gets query for [[Warehouses]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getWarehouses()
    {
        return $this->hasMany(NWarehouse::className(), ['warehouse_id' => 'warehouse_id'])->viaTable('n_inv_balance', ['item_id' => 'item_id']);
    }

    /**
     * Gets query for [[NInvBalanceTmps]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNInvBalanceTmps()
    {
        return $this->hasMany(NInvBalanceTmp::className(), ['item_id' => 'item_id']);
    }

    /**
     * Gets query for [[NInvCountDets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNInvCountDets()
    {
        return $this->hasMany(NInvCountDet::className(), ['item_id' => 'item_id']);
    }

    /**
     * Gets query for [[NInvHistories]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNInvHistories()
    {
        return $this->hasMany(NInvHistory::className(), ['item_id' => 'item_id']);
    }

    /**
     * Gets query for [[NInvTransferDets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNInvTransferDets()
    {
        return $this->hasMany(NInvTransferDet::className(), ['item_id' => 'item_id']);
    }

    /**
     * Gets query for [[SalesTax2]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSalesTax2()
    {
        return $this->hasOne(Tax::className(), ['tax_id' => 'sales_tax2_id']);
    }

    /**
     * Gets query for [[PurchaseTax1]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPurchaseTax1()
    {
        return $this->hasOne(Tax::className(), ['tax_id' => 'purchase_tax1_id']);
    }

    /**
     * Gets query for [[PurchaseTax2]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPurchaseTax2()
    {
        return $this->hasOne(Tax::className(), ['tax_id' => 'purchase_tax2_id']);
    }

    /**
     * Gets query for [[PurchaseTax3]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPurchaseTax3()
    {
        return $this->hasOne(Tax::className(), ['tax_id' => 'purchase_tax3_id']);
    }

    /**
     * Gets query for [[SalesRetGlAcc]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSalesRetGlAcc()
    {
        return $this->hasOne(GlAccount::className(), ['account_id' => 'sales_ret_gl_acc_id']);
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
     * Gets query for [[SalesTax1]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSalesTax1()
    {
        return $this->hasOne(Tax::className(), ['tax_id' => 'sales_tax1_id']);
    }

    /**
     * Gets query for [[Vendor]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getVendor()
    {
        return $this->hasOne(Vendor::className(), ['vendor_id' => 'vendor_id']);
    }

    /**
     * Gets query for [[ItemType]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getItemType()
    {
        return $this->hasOne(NItemType::className(), ['item_type_id' => 'item_type_id']);
    }

    /**
     * Gets query for [[ItemGroup]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getItemGroup()
    {
        return $this->hasOne(NItemGroup::className(), ['item_group_id' => 'item_group_id']);
    }

    /**
     * Gets query for [[SalesGlAcc]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSalesGlAcc()
    {
        return $this->hasOne(GlAccount::className(), ['account_id' => 'sales_gl_acc_id']);
    }

    /**
     * Gets query for [[SalesDiscGlAcc]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSalesDiscGlAcc()
    {
        return $this->hasOne(GlAccount::className(), ['account_id' => 'sales_disc_gl_acc_id']);
    }

    /**
     * Gets query for [[InventoryGlAcc]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInventoryGlAcc()
    {
        return $this->hasOne(GlAccount::className(), ['account_id' => 'inventory_gl_acc_id']);
    }

    /**
     * Gets query for [[CogsGlAcc]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCogsGlAcc()
    {
        return $this->hasOne(GlAccount::className(), ['account_id' => 'cogs_gl_acc_id']);
    }

    /**
     * Gets query for [[Uom]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUom()
    {
        return $this->hasOne(NUom::className(), ['uom_id' => 'uom_id']);
    }

    /**
     * Gets query for [[SalesTax3]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSalesTax3()
    {
        return $this->hasOne(Tax::className(), ['tax_id' => 'sales_tax3_id']);
    }

    /**
     * Gets query for [[NPorderDets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNPorderDets()
    {
        return $this->hasMany(NPorderDet::className(), ['item_id' => 'item_id']);
    }

    /**
     * Gets query for [[NPreceiptDets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNPreceiptDets()
    {
        return $this->hasMany(NPreceiptDet::className(), ['item_id' => 'item_id']);
    }
}
