<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "item_trf".
 *
 * @property int $item_id
 * @property string|null $item_no
 * @property string|null $item_name
 * @property int|null $item_type_id
 * @property int|null $item_group_id
 * @property int|null $uom_id
 * @property int|null $sales_item
 * @property int|null $purchase_istem
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
 * @property int|null $inventory_gl_acc_ida
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
 * @property int|null $pharm_formula_editabe
 * @property int|null $formula_price_fixed
 * @property int|null $formula_add_price_zero
 * @property int|null $item_category
 * @property int|null $laboratory
 * @property int|null $dist_sales
 * @property int|null $enable_auto_charge
 * @property int|null $ac_occurance
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
 * @property int|null $kategori_dokter
 * @property string|null $item_name_en
 * @property string|null $kategori1_en
 * @property string|null $kategori2_en
 * @property string|null $kategori3_en
 * @property string|null $kategori4_en
 * @property string|null $kategori5_en
 */
class ItemTrf extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'item_trf';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['item_id'], 'required'],
            [['item_id', 'item_type_id', 'item_group_id', 'uom_id', 'sales_item', 'purchase_istem', 'wip_item', 'material_per_batch', 'disabled', 'backorderable', 'col_staff_enabled', 'sales_gl_acc_id', 'sales_disc_gl_acc_id', 'inventory_gl_acc_ida', 'cogs_gl_acc_id', 'created_user_id', 'modified_user_id', 'sales_tax1_id', 'sales_tax2_id', 'sales_tax3_id', 'purchase_tax1_id', 'purchase_tax2_id', 'purchase_tax3_id', 'price_define', 'price_value', 'sales_ret_gl_acc_id', 'pharm_formula_editabe', 'formula_price_fixed', 'formula_add_price_zero', 'item_category', 'laboratory', 'dist_sales', 'enable_auto_charge', 'ac_occurance', 'ac_limit_app', 'ac_limit_num_of_app', 'therapy', 'vendor_id', 'kategori_dokter'], 'integer'],
            [['minimum_qty', 'safety_level', 'economic_order_qty', 'unit_weight', 'qty_per_batch', 'unit_price', 'unit_discount', 'fixed_cost', 'wgt_avg_cost', 'markup_pc', 'ac_round_to', 'ac_round_offset', 'last_purchase_price', 'last_purchase_disc_pc'], 'number'],
            [['created_time', 'modified_time', 'ac_evaluate_time'], 'safe'],
            [['notes', 'lab_exam_mtd'], 'string'],
            [['item_no'], 'string', 'max' => 20],
            [['item_name', 'manufacturer', 'warna', 'sediaan', 'kel_therapi', 'carapakai', 'kategori1', 'kategori2', 'kategori3', 'kategori4', 'kategori5', 'item_name_en', 'kategori1_en', 'kategori2_en', 'kategori3_en', 'kategori4_en', 'kategori5_en'], 'string', 'max' => 50],
            [['formula', 'gol_ims', 'subgol_ims'], 'string', 'max' => 150],
            [['item_id'], 'unique'],
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
            'purchase_istem' => 'Purchase Istem',
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
            'inventory_gl_acc_ida' => 'Inventory Gl Acc Ida',
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
            'pharm_formula_editabe' => 'Pharm Formula Editabe',
            'formula_price_fixed' => 'Formula Price Fixed',
            'formula_add_price_zero' => 'Formula Add Price Zero',
            'item_category' => 'Item Category',
            'laboratory' => 'Laboratory',
            'dist_sales' => 'Dist Sales',
            'enable_auto_charge' => 'Enable Auto Charge',
            'ac_occurance' => 'Ac Occurance',
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
            'kategori_dokter' => 'Kategori Dokter',
            'item_name_en' => 'Item Name En',
            'kategori1_en' => 'Kategori1 En',
            'kategori2_en' => 'Kategori2 En',
            'kategori3_en' => 'Kategori3 En',
            'kategori4_en' => 'Kategori4 En',
            'kategori5_en' => 'Kategori5 En',
        ];
    }
}
