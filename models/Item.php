<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "item".
 *
 * @property int $item_id
 * @property string|null $item_no
 * @property string|null $item_name
 * @property string|null $item_english
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
 * @property int|null $fixed_cost_pct
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
 * @property int|null $formula_price_fixed
 * @property int|null $formula_add_price_zero
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
 * @property float|null $max_purchase_price
 * @property float|null $max_nett_purchase_price
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
 * @property string|null $kategori6
 * @property string|null $photo
 * @property int|null $kategori_dokter
 * @property string|null $item_name_en
 * @property string|null $kategori1_en
 * @property string|null $kategori2_en
 * @property string|null $kategori3_en
 * @property string|null $kategori4_en
 * @property string|null $kategori5_en
 *
 * @property ArInvDet[] $arInvDets
 * @property CosItem[] $cosItems
 * @property Cos[] $cos
 * @property CustomerItemPrice[] $customerItemPrices
 * @property Customer[] $customers
 * @property DeptItem[] $deptItems
 * @property ExamItem[] $examItems
 * @property Exam[] $exams
 * @property FolioItem[] $folioItems
 * @property FolioItemAuto[] $folioItemAutos
 * @property FolioItemMtl[] $folioItemMtls
 * @property FolioTherapyItem[] $folioTherapyItems
 * @property FolioTherapyMtl[] $folioTherapyMtls
 * @property GlJfoDet[] $glJfoDets
 * @property InvAdjDet[] $invAdjDets
 * @property InvBalance[] $invBalances
 * @property Warehouse[] $warehouses
 * @property InvBalanceTmp[] $invBalanceTmps
 * @property InvCountDet[] $invCountDets
 * @property InvHistory[] $invHistories
 * @property InvTransferDet[] $invTransferDets
 * @property Tax $salesTax2
 * @property ItemType $itemType
 * @property ItemGroup $itemGroup
 * @property GlAccount $salesGlAcc
 * @property GlAccount $salesDiscGlAcc
 * @property GlAccount $inventoryGlAcc
 * @property GlAccount $cogsGlAcc
 * @property Uom $uom
 * @property Vendor $vendor
 * @property Tax $salesTax3
 * @property Tax $purchaseTax1
 * @property Tax $purchaseTax2
 * @property Tax $purchaseTax3
 * @property GlAccount $salesRetGlAcc
 * @property ScrtUser $createdUser
 * @property ScrtUser $modifiedUser
 * @property Tax $salesTax1
 * @property ItemCosPrice[] $itemCosPrices
 * @property Cos[] $cos0
 * @property ItemCosPriceFuture[] $itemCosPriceFutures
 * @property ItemDist[] $itemDists
 * @property ItemKits[] $itemKits
 * @property ItemMtl[] $itemMtls
 * @property ItemMtl[] $itemMtls0
 * @property ItemOutForSo[] $itemOutForSos
 * @property Warehouse[] $warehouses0
 * @property ItemRes[] $itemRes
 * @property Morder[] $morders
 * @property MorderMtl[] $morderMtls
 * @property MreceiptByprod[] $mreceiptByprods
 * @property MreceiptMtl[] $mreceiptMtls
 * @property PayByItem[] $payByItems
 * @property PayBy[] $payBies
 * @property PayByItemPrice[] $payByItemPrices
 * @property PayBy[] $payBies0
 * @property PorderDet[] $porderDets
 * @property PreceiptDet[] $preceiptDets
 * @property ShipmentDet[] $shipmentDets
 * @property SorderDet[] $sorderDets
 * @property WarehouseItem[] $warehouseItems
 * @property Warehouse[] $warehouses1
 */
class Item extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'item';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['item_id'], 'required'],
            [['item_id', 'item_type_id', 'item_group_id', 'uom_id', 'sales_item', 'purchase_item', 'wip_item', 'material_per_batch', 'disabled', 'backorderable', 'fixed_cost_pct', 'col_staff_enabled', 'sales_gl_acc_id', 'sales_disc_gl_acc_id', 'inventory_gl_acc_id', 'cogs_gl_acc_id', 'created_user_id', 'modified_user_id', 'sales_tax1_id', 'sales_tax2_id', 'sales_tax3_id', 'purchase_tax1_id', 'purchase_tax2_id', 'purchase_tax3_id', 'price_define', 'price_value', 'sales_ret_gl_acc_id', 'pharm_formula_editable', 'formula_price_fixed', 'formula_add_price_zero', 'item_category', 'laboratory', 'dist_sales', 'enable_auto_charge', 'ac_occurence', 'ac_limit_app', 'ac_limit_num_of_app', 'therapy', 'vendor_id', 'kategori_dokter'], 'integer'],
            [['minimum_qty', 'safety_level', 'economic_order_qty', 'unit_weight', 'qty_per_batch', 'unit_price', 'unit_discount', 'fixed_cost', 'wgt_avg_cost', 'markup_pc', 'ac_round_to', 'ac_round_offset', 'last_purchase_price', 'last_purchase_disc_pc', 'max_purchase_price', 'max_nett_purchase_price'], 'number'],
            [['created_time', 'modified_time', 'ac_evaluate_time'], 'safe'],
            [['notes', 'lab_exam_mtd', 'photo'], 'string'],
            [['item_no'], 'string', 'max' => 20],
            [['item_name', 'item_english', 'manufacturer', 'formula', 'warna', 'sediaan', 'gol_ims', 'subgol_ims', 'kel_therapi', 'carapakai', 'kategori1', 'kategori2', 'kategori3', 'kategori4', 'kategori5', 'kategori6', 'item_name_en', 'kategori1_en', 'kategori2_en', 'kategori3_en', 'kategori4_en', 'kategori5_en'], 'string', 'max' => 50],
            [['item_name'], 'unique'],
            [['item_no'], 'unique'],
            [['item_id'], 'unique'],
            [['sales_tax2_id'], 'exist', 'skipOnError' => true, 'targetClass' => Tax::className(), 'targetAttribute' => ['sales_tax2_id' => 'tax_id']],
            [['item_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => ItemType::className(), 'targetAttribute' => ['item_type_id' => 'item_type_id']],
            [['item_group_id'], 'exist', 'skipOnError' => true, 'targetClass' => ItemGroup::className(), 'targetAttribute' => ['item_group_id' => 'item_group_id']],
            [['sales_gl_acc_id'], 'exist', 'skipOnError' => true, 'targetClass' => GlAccount::className(), 'targetAttribute' => ['sales_gl_acc_id' => 'account_id']],
            [['sales_disc_gl_acc_id'], 'exist', 'skipOnError' => true, 'targetClass' => GlAccount::className(), 'targetAttribute' => ['sales_disc_gl_acc_id' => 'account_id']],
            [['inventory_gl_acc_id'], 'exist', 'skipOnError' => true, 'targetClass' => GlAccount::className(), 'targetAttribute' => ['inventory_gl_acc_id' => 'account_id']],
            [['cogs_gl_acc_id'], 'exist', 'skipOnError' => true, 'targetClass' => GlAccount::className(), 'targetAttribute' => ['cogs_gl_acc_id' => 'account_id']],
            [['uom_id'], 'exist', 'skipOnError' => true, 'targetClass' => Uom::className(), 'targetAttribute' => ['uom_id' => 'uom_id']],
            [['vendor_id'], 'exist', 'skipOnError' => true, 'targetClass' => Vendor::className(), 'targetAttribute' => ['vendor_id' => 'vendor_id']],
            [['sales_tax3_id'], 'exist', 'skipOnError' => true, 'targetClass' => Tax::className(), 'targetAttribute' => ['sales_tax3_id' => 'tax_id']],
            [['purchase_tax1_id'], 'exist', 'skipOnError' => true, 'targetClass' => Tax::className(), 'targetAttribute' => ['purchase_tax1_id' => 'tax_id']],
            [['purchase_tax2_id'], 'exist', 'skipOnError' => true, 'targetClass' => Tax::className(), 'targetAttribute' => ['purchase_tax2_id' => 'tax_id']],
            [['purchase_tax3_id'], 'exist', 'skipOnError' => true, 'targetClass' => Tax::className(), 'targetAttribute' => ['purchase_tax3_id' => 'tax_id']],
            [['sales_ret_gl_acc_id'], 'exist', 'skipOnError' => true, 'targetClass' => GlAccount::className(), 'targetAttribute' => ['sales_ret_gl_acc_id' => 'account_id']],
            [['created_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['created_user_id' => 'user_id']],
            [['modified_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['modified_user_id' => 'user_id']],
            [['sales_tax1_id'], 'exist', 'skipOnError' => true, 'targetClass' => Tax::className(), 'targetAttribute' => ['sales_tax1_id' => 'tax_id']],
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
            'item_english' => 'Item English',
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
            'fixed_cost_pct' => 'Fixed Cost Pct',
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
            'formula_price_fixed' => 'Formula Price Fixed',
            'formula_add_price_zero' => 'Formula Add Price Zero',
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
            'max_purchase_price' => 'Max Purchase Price',
            'max_nett_purchase_price' => 'Max Nett Purchase Price',
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
            'kategori6' => 'Kategori6',
            'photo' => 'Photo',
            'kategori_dokter' => 'Kategori Dokter',
            'item_name_en' => 'Item Name En',
            'kategori1_en' => 'Kategori1 En',
            'kategori2_en' => 'Kategori2 En',
            'kategori3_en' => 'Kategori3 En',
            'kategori4_en' => 'Kategori4 En',
            'kategori5_en' => 'Kategori5 En',
        ];
    }

    /**
     * Gets query for [[ArInvDets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getArInvDets()
    {
        return $this->hasMany(ArInvDet::className(), ['item_id' => 'item_id']);
    }

    /**
     * Gets query for [[CosItems]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCosItems()
    {
        return $this->hasMany(CosItem::className(), ['item_id' => 'item_id']);
    }

    /**
     * Gets query for [[Cos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCos()
    {
        return $this->hasMany(Cos::className(), ['cos_id' => 'cos_id'])->viaTable('cos_item', ['item_id' => 'item_id']);
    }

    /**
     * Gets query for [[CustomerItemPrices]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCustomerItemPrices()
    {
        return $this->hasMany(CustomerItemPrice::className(), ['item_id' => 'item_id']);
    }

    /**
     * Gets query for [[Customers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCustomers()
    {
        return $this->hasMany(Customer::className(), ['customer_id' => 'customer_id'])->viaTable('customer_item_price', ['item_id' => 'item_id']);
    }

    /**
     * Gets query for [[DeptItems]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDeptItems()
    {
        return $this->hasMany(DeptItem::className(), ['item_id' => 'item_id']);
    }

    /**
     * Gets query for [[ExamItems]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getExamItems()
    {
        return $this->hasMany(ExamItem::className(), ['item_id' => 'item_id']);
    }

    /**
     * Gets query for [[Exams]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getExams()
    {
        return $this->hasMany(Exam::className(), ['exam_id' => 'exam_id'])->viaTable('exam_item', ['item_id' => 'item_id']);
    }

    /**
     * Gets query for [[FolioItems]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFolioItems()
    {
        return $this->hasMany(FolioItem::className(), ['item_id' => 'item_id']);
    }

    /**
     * Gets query for [[FolioItemAutos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFolioItemAutos()
    {
        return $this->hasMany(FolioItemAuto::className(), ['item_id' => 'item_id']);
    }

    /**
     * Gets query for [[FolioItemMtls]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFolioItemMtls()
    {
        return $this->hasMany(FolioItemMtl::className(), ['material_item_id' => 'item_id']);
    }

    /**
     * Gets query for [[FolioTherapyItems]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFolioTherapyItems()
    {
        return $this->hasMany(FolioTherapyItem::className(), ['item_id' => 'item_id']);
    }

    /**
     * Gets query for [[FolioTherapyMtls]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFolioTherapyMtls()
    {
        return $this->hasMany(FolioTherapyMtl::className(), ['material_item_id' => 'item_id']);
    }

    /**
     * Gets query for [[GlJfoDets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGlJfoDets()
    {
        return $this->hasMany(GlJfoDet::className(), ['item_id' => 'item_id']);
    }

    /**
     * Gets query for [[InvAdjDets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInvAdjDets()
    {
        return $this->hasMany(InvAdjDet::className(), ['item_id' => 'item_id']);
    }

    /**
     * Gets query for [[InvBalances]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInvBalances()
    {
        return $this->hasMany(InvBalance::className(), ['item_id' => 'item_id']);
    }

    /**
     * Gets query for [[Warehouses]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getWarehouses()
    {
        return $this->hasMany(Warehouse::className(), ['warehouse_id' => 'warehouse_id'])->viaTable('inv_balance', ['item_id' => 'item_id']);
    }

    /**
     * Gets query for [[InvBalanceTmps]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInvBalanceTmps()
    {
        return $this->hasMany(InvBalanceTmp::className(), ['item_id' => 'item_id']);
    }

    /**
     * Gets query for [[InvCountDets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInvCountDets()
    {
        return $this->hasMany(InvCountDet::className(), ['item_id' => 'item_id']);
    }

    /**
     * Gets query for [[InvHistories]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInvHistories()
    {
        return $this->hasMany(InvHistory::className(), ['item_id' => 'item_id']);
    }

    /**
     * Gets query for [[InvTransferDets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInvTransferDets()
    {
        return $this->hasMany(InvTransferDet::className(), ['item_id' => 'item_id']);
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
     * Gets query for [[ItemType]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getItemType()
    {
        return $this->hasOne(ItemType::className(), ['item_type_id' => 'item_type_id']);
    }

    /**
     * Gets query for [[ItemGroup]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getItemGroup()
    {
        return $this->hasOne(ItemGroup::className(), ['item_group_id' => 'item_group_id']);
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
        return $this->hasOne(Uom::className(), ['uom_id' => 'uom_id']);
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
     * Gets query for [[SalesTax3]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSalesTax3()
    {
        return $this->hasOne(Tax::className(), ['tax_id' => 'sales_tax3_id']);
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
     * Gets query for [[ItemCosPrices]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getItemCosPrices()
    {
        return $this->hasMany(ItemCosPrice::className(), ['item_id' => 'item_id']);
    }

    /**
     * Gets query for [[Cos0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCos0()
    {
        return $this->hasMany(Cos::className(), ['cos_id' => 'cos_id'])->viaTable('item_cos_price', ['item_id' => 'item_id']);
    }

    /**
     * Gets query for [[ItemCosPriceFutures]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getItemCosPriceFutures()
    {
        return $this->hasMany(ItemCosPriceFuture::className(), ['item_id' => 'item_id']);
    }

    /**
     * Gets query for [[ItemDists]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getItemDists()
    {
        return $this->hasMany(ItemDist::className(), ['item_id' => 'item_id']);
    }

    /**
     * Gets query for [[ItemKits]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getItemKits()
    {
        return $this->hasMany(ItemKits::className(), ['item_id' => 'item_id']);
    }

    /**
     * Gets query for [[ItemMtls]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getItemMtls()
    {
        return $this->hasMany(ItemMtl::className(), ['material_item_id' => 'item_id']);
    }

    /**
     * Gets query for [[ItemMtls0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getItemMtls0()
    {
        return $this->hasMany(ItemMtl::className(), ['item_id' => 'item_id']);
    }

    /**
     * Gets query for [[ItemOutForSos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getItemOutForSos()
    {
        return $this->hasMany(ItemOutForSo::className(), ['item_id' => 'item_id']);
    }

    /**
     * Gets query for [[Warehouses0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getWarehouses0()
    {
        return $this->hasMany(Warehouse::className(), ['warehouse_id' => 'warehouse_id'])->viaTable('item_out_for_so', ['item_id' => 'item_id']);
    }

    /**
     * Gets query for [[ItemRes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getItemRes()
    {
        return $this->hasMany(ItemRes::className(), ['item_id' => 'item_id']);
    }

    /**
     * Gets query for [[Morders]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMorders()
    {
        return $this->hasMany(Morder::className(), ['item_id' => 'item_id']);
    }

    /**
     * Gets query for [[MorderMtls]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMorderMtls()
    {
        return $this->hasMany(MorderMtl::className(), ['material_item_id' => 'item_id']);
    }

    /**
     * Gets query for [[MreceiptByprods]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMreceiptByprods()
    {
        return $this->hasMany(MreceiptByprod::className(), ['material_item_id' => 'item_id']);
    }

    /**
     * Gets query for [[MreceiptMtls]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMreceiptMtls()
    {
        return $this->hasMany(MreceiptMtl::className(), ['material_item_id' => 'item_id']);
    }

    /**
     * Gets query for [[PayByItems]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPayByItems()
    {
        return $this->hasMany(PayByItem::className(), ['item_id' => 'item_id']);
    }

    /**
     * Gets query for [[PayBies]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPayBies()
    {
        return $this->hasMany(PayBy::className(), ['pay_by_id' => 'pay_by_id'])->viaTable('pay_by_item', ['item_id' => 'item_id']);
    }

    /**
     * Gets query for [[PayByItemPrices]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPayByItemPrices()
    {
        return $this->hasMany(PayByItemPrice::className(), ['item_id' => 'item_id']);
    }

    /**
     * Gets query for [[PayBies0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPayBies0()
    {
        return $this->hasMany(PayBy::className(), ['pay_by_id' => 'pay_by_id'])->viaTable('pay_by_item_price', ['item_id' => 'item_id']);
    }

    /**
     * Gets query for [[PorderDets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPorderDets()
    {
        return $this->hasMany(PorderDet::className(), ['item_id' => 'item_id']);
    }

    /**
     * Gets query for [[PreceiptDets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPreceiptDets()
    {
        return $this->hasMany(PreceiptDet::className(), ['item_id' => 'item_id']);
    }

    /**
     * Gets query for [[ShipmentDets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getShipmentDets()
    {
        return $this->hasMany(ShipmentDet::className(), ['item_id' => 'item_id']);
    }

    /**
     * Gets query for [[SorderDets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSorderDets()
    {
        return $this->hasMany(SorderDet::className(), ['item_id' => 'item_id']);
    }

    /**
     * Gets query for [[WarehouseItems]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getWarehouseItems()
    {
        return $this->hasMany(WarehouseItem::className(), ['item_id' => 'item_id']);
    }

    /**
     * Gets query for [[Warehouses1]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getWarehouses1()
    {
        return $this->hasMany(Warehouse::className(), ['warehouse_id' => 'warehouse_id'])->viaTable('warehouse_item', ['item_id' => 'item_id']);
    }
}
