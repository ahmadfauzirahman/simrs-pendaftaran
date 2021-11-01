<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ItemTrfSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="row mt-2">
    <div class="col-md-12">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'item_id') ?>

    <?= $form->field($model, 'item_no') ?>

    <?= $form->field($model, 'item_name') ?>

    <?= $form->field($model, 'item_type_id') ?>

    <?= $form->field($model, 'item_group_id') ?>

    <?php // echo $form->field($model, 'uom_id') ?>

    <?php // echo $form->field($model, 'sales_item') ?>

    <?php // echo $form->field($model, 'purchase_istem') ?>

    <?php // echo $form->field($model, 'wip_item') ?>

    <?php // echo $form->field($model, 'minimum_qty') ?>

    <?php // echo $form->field($model, 'safety_level') ?>

    <?php // echo $form->field($model, 'economic_order_qty') ?>

    <?php // echo $form->field($model, 'unit_weight') ?>

    <?php // echo $form->field($model, 'qty_per_batch') ?>

    <?php // echo $form->field($model, 'material_per_batch') ?>

    <?php // echo $form->field($model, 'disabled') ?>

    <?php // echo $form->field($model, 'backorderable') ?>

    <?php // echo $form->field($model, 'unit_price') ?>

    <?php // echo $form->field($model, 'unit_discount') ?>

    <?php // echo $form->field($model, 'fixed_cost') ?>

    <?php // echo $form->field($model, 'wgt_avg_cost') ?>

    <?php // echo $form->field($model, 'col_staff_enabled') ?>

    <?php // echo $form->field($model, 'sales_gl_acc_id') ?>

    <?php // echo $form->field($model, 'sales_disc_gl_acc_id') ?>

    <?php // echo $form->field($model, 'inventory_gl_acc_ida') ?>

    <?php // echo $form->field($model, 'cogs_gl_acc_id') ?>

    <?php // echo $form->field($model, 'created_user_id') ?>

    <?php // echo $form->field($model, 'created_time') ?>

    <?php // echo $form->field($model, 'modified_user_id') ?>

    <?php // echo $form->field($model, 'modified_time') ?>

    <?php // echo $form->field($model, 'notes') ?>

    <?php // echo $form->field($model, 'lab_exam_mtd') ?>

    <?php // echo $form->field($model, 'sales_tax1_id') ?>

    <?php // echo $form->field($model, 'sales_tax2_id') ?>

    <?php // echo $form->field($model, 'sales_tax3_id') ?>

    <?php // echo $form->field($model, 'purchase_tax1_id') ?>

    <?php // echo $form->field($model, 'purchase_tax2_id') ?>

    <?php // echo $form->field($model, 'purchase_tax3_id') ?>

    <?php // echo $form->field($model, 'price_define') ?>

    <?php // echo $form->field($model, 'markup_pc') ?>

    <?php // echo $form->field($model, 'price_value') ?>

    <?php // echo $form->field($model, 'sales_ret_gl_acc_id') ?>

    <?php // echo $form->field($model, 'pharm_formula_editabe') ?>

    <?php // echo $form->field($model, 'formula_price_fixed') ?>

    <?php // echo $form->field($model, 'formula_add_price_zero') ?>

    <?php // echo $form->field($model, 'item_category') ?>

    <?php // echo $form->field($model, 'laboratory') ?>

    <?php // echo $form->field($model, 'dist_sales') ?>

    <?php // echo $form->field($model, 'enable_auto_charge') ?>

    <?php // echo $form->field($model, 'ac_occurance') ?>

    <?php // echo $form->field($model, 'ac_limit_app') ?>

    <?php // echo $form->field($model, 'ac_limit_num_of_app') ?>

    <?php // echo $form->field($model, 'ac_evaluate_time') ?>

    <?php // echo $form->field($model, 'ac_round_to') ?>

    <?php // echo $form->field($model, 'ac_round_offset') ?>

    <?php // echo $form->field($model, 'therapy') ?>

    <?php // echo $form->field($model, 'vendor_id') ?>

    <?php // echo $form->field($model, 'last_purchase_price') ?>

    <?php // echo $form->field($model, 'last_purchase_disc_pc') ?>

    <?php // echo $form->field($model, 'manufacturer') ?>

    <?php // echo $form->field($model, 'formula') ?>

    <?php // echo $form->field($model, 'warna') ?>

    <?php // echo $form->field($model, 'sediaan') ?>

    <?php // echo $form->field($model, 'gol_ims') ?>

    <?php // echo $form->field($model, 'subgol_ims') ?>

    <?php // echo $form->field($model, 'kel_therapi') ?>

    <?php // echo $form->field($model, 'carapakai') ?>

    <?php // echo $form->field($model, 'kategori1') ?>

    <?php // echo $form->field($model, 'kategori2') ?>

    <?php // echo $form->field($model, 'kategori3') ?>

    <?php // echo $form->field($model, 'kategori4') ?>

    <?php // echo $form->field($model, 'kategori5') ?>

    <?php // echo $form->field($model, 'kategori_dokter') ?>

    <?php // echo $form->field($model, 'item_name_en') ?>

    <?php // echo $form->field($model, 'kategori1_en') ?>

    <?php // echo $form->field($model, 'kategori2_en') ?>

    <?php // echo $form->field($model, 'kategori3_en') ?>

    <?php // echo $form->field($model, 'kategori4_en') ?>

    <?php // echo $form->field($model, 'kategori5_en') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    </div>
    <!--.col-md-12-->
</div>
