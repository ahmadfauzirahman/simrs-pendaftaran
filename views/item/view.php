<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Item */

$this->title = $model->item_id;
$this->params['breadcrumbs'][] = ['label' => 'Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <p>
                        <?= Html::a('Update', ['update', 'id' => $model->item_id], ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('Delete', ['delete', 'id' => $model->item_id], [
                            'class' => 'btn btn-danger',
                            'data' => [
                                'confirm' => 'Are you sure you want to delete this item?',
                                'method' => 'post',
                            ],
                        ]) ?>
                    </p>
                    <?= DetailView::widget([
                        'model' => $model,
                        'attributes' => [
                            'item_id',
                            'item_no',
                            'item_name',
                            'item_english',
                            'item_type_id',
                            'item_group_id',
                            'uom_id',
                            'sales_item',
                            'purchase_item',
                            'wip_item',
                            'minimum_qty',
                            'safety_level',
                            'economic_order_qty',
                            'unit_weight',
                            'qty_per_batch',
                            'material_per_batch',
                            'disabled',
                            'backorderable',
                            'unit_price',
                            'unit_discount',
                            'fixed_cost',
                            'fixed_cost_pct',
                            'wgt_avg_cost',
                            'col_staff_enabled',
                            'sales_gl_acc_id',
                            'sales_disc_gl_acc_id',
                            'inventory_gl_acc_id',
                            'cogs_gl_acc_id',
                            'created_user_id',
                            'created_time',
                            'modified_user_id',
                            'modified_time',
                            'notes:ntext',
                            'lab_exam_mtd:ntext',
                            'sales_tax1_id',
                            'sales_tax2_id',
                            'sales_tax3_id',
                            'purchase_tax1_id',
                            'purchase_tax2_id',
                            'purchase_tax3_id',
                            'price_define',
                            'markup_pc',
                            'price_value',
                            'sales_ret_gl_acc_id',
                            'pharm_formula_editable',
                            'formula_price_fixed',
                            'formula_add_price_zero',
                            'item_category',
                            'laboratory',
                            'dist_sales',
                            'enable_auto_charge',
                            'ac_occurence',
                            'ac_limit_app',
                            'ac_limit_num_of_app',
                            'ac_evaluate_time',
                            'ac_round_to',
                            'ac_round_offset',
                            'therapy',
                            'vendor_id',
                            'last_purchase_price',
                            'last_purchase_disc_pc',
                            'max_purchase_price',
                            'max_nett_purchase_price',
                            'manufacturer',
                            'formula',
                            'warna',
                            'sediaan',
                            'gol_ims',
                            'subgol_ims',
                            'kel_therapi',
                            'carapakai',
                            'kategori1',
                            'kategori2',
                            'kategori3',
                            'kategori4',
                            'kategori5',
                            'kategori6',
                            'photo',
                            'kategori_dokter',
                            'item_name_en',
                            'kategori1_en',
                            'kategori2_en',
                            'kategori3_en',
                            'kategori4_en',
                            'kategori5_en',
                        ],
                    ]) ?>
                </div>
                <!--.col-md-12-->
            </div>
            <!--.row-->
        </div>
        <!--.card-body-->
    </div>
    <!--.card-->
</div>