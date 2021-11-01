<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ItemTrf */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="item-trf-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'item_id')->textInput() ?>

    <?= $form->field($model, 'item_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'item_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'item_type_id')->textInput() ?>

    <?= $form->field($model, 'item_group_id')->textInput() ?>

    <?= $form->field($model, 'uom_id')->textInput() ?>

    <?= $form->field($model, 'sales_item')->textInput() ?>

    <?= $form->field($model, 'purchase_istem')->textInput() ?>

    <?= $form->field($model, 'wip_item')->textInput() ?>

    <?= $form->field($model, 'minimum_qty')->textInput() ?>

    <?= $form->field($model, 'safety_level')->textInput() ?>

    <?= $form->field($model, 'economic_order_qty')->textInput() ?>

    <?= $form->field($model, 'unit_weight')->textInput() ?>

    <?= $form->field($model, 'qty_per_batch')->textInput() ?>

    <?= $form->field($model, 'material_per_batch')->textInput() ?>

    <?= $form->field($model, 'disabled')->textInput() ?>

    <?= $form->field($model, 'backorderable')->textInput() ?>

    <?= $form->field($model, 'unit_price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'unit_discount')->textInput() ?>

    <?= $form->field($model, 'fixed_cost')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'wgt_avg_cost')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'col_staff_enabled')->textInput() ?>

    <?= $form->field($model, 'sales_gl_acc_id')->textInput() ?>

    <?= $form->field($model, 'sales_disc_gl_acc_id')->textInput() ?>

    <?= $form->field($model, 'inventory_gl_acc_ida')->textInput() ?>

    <?= $form->field($model, 'cogs_gl_acc_id')->textInput() ?>

    <?= $form->field($model, 'created_user_id')->textInput() ?>

    <?= $form->field($model, 'created_time')->textInput() ?>

    <?= $form->field($model, 'modified_user_id')->textInput() ?>

    <?= $form->field($model, 'modified_time')->textInput() ?>

    <?= $form->field($model, 'notes')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'lab_exam_mtd')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'sales_tax1_id')->textInput() ?>

    <?= $form->field($model, 'sales_tax2_id')->textInput() ?>

    <?= $form->field($model, 'sales_tax3_id')->textInput() ?>

    <?= $form->field($model, 'purchase_tax1_id')->textInput() ?>

    <?= $form->field($model, 'purchase_tax2_id')->textInput() ?>

    <?= $form->field($model, 'purchase_tax3_id')->textInput() ?>

    <?= $form->field($model, 'price_define')->textInput() ?>

    <?= $form->field($model, 'markup_pc')->textInput() ?>

    <?= $form->field($model, 'price_value')->textInput() ?>

    <?= $form->field($model, 'sales_ret_gl_acc_id')->textInput() ?>

    <?= $form->field($model, 'pharm_formula_editabe')->textInput() ?>

    <?= $form->field($model, 'formula_price_fixed')->textInput() ?>

    <?= $form->field($model, 'formula_add_price_zero')->textInput() ?>

    <?= $form->field($model, 'item_category')->textInput() ?>

    <?= $form->field($model, 'laboratory')->textInput() ?>

    <?= $form->field($model, 'dist_sales')->textInput() ?>

    <?= $form->field($model, 'enable_auto_charge')->textInput() ?>

    <?= $form->field($model, 'ac_occurance')->textInput() ?>

    <?= $form->field($model, 'ac_limit_app')->textInput() ?>

    <?= $form->field($model, 'ac_limit_num_of_app')->textInput() ?>

    <?= $form->field($model, 'ac_evaluate_time')->textInput() ?>

    <?= $form->field($model, 'ac_round_to')->textInput() ?>

    <?= $form->field($model, 'ac_round_offset')->textInput() ?>

    <?= $form->field($model, 'therapy')->textInput() ?>

    <?= $form->field($model, 'vendor_id')->textInput() ?>

    <?= $form->field($model, 'last_purchase_price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'last_purchase_disc_pc')->textInput() ?>

    <?= $form->field($model, 'manufacturer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'formula')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'warna')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sediaan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gol_ims')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'subgol_ims')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kel_therapi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'carapakai')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kategori1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kategori2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kategori3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kategori4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kategori5')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kategori_dokter')->textInput() ?>

    <?= $form->field($model, 'item_name_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kategori1_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kategori2_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kategori3_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kategori4_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kategori5_en')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
