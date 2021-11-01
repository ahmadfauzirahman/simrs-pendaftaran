<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ScrtMod */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="scrt-mod-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'mod_id')->textInput() ?>

    <?= $form->field($model, 'mod_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'standard_actions')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'add_actions')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'action_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'form_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'parent_mod_id')->textInput() ?>

    <?= $form->field($model, 'order_seq')->textInput() ?>

    <?= $form->field($model, 'notes')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'before_insert_url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'after_insert_url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'before_edit_url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'after_edit_url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'before_save_url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'after_save_url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'before_cancel_url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'after_cancel_url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'before_delete_url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'after_delete_url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'before_copy_url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'after_copy_url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'before_post_url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'after_post_url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'before_export_url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'after_export_url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'before_print_url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'after_print_url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'before_refresh_url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'after_refresh_url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'on_call_url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bi_x')->textInput() ?>

    <?= $form->field($model, 'bi_y')->textInput() ?>

    <?= $form->field($model, 'ai_x')->textInput() ?>

    <?= $form->field($model, 'ai_y')->textInput() ?>

    <?= $form->field($model, 'be_x')->textInput() ?>

    <?= $form->field($model, 'be_y')->textInput() ?>

    <?= $form->field($model, 'ae_x')->textInput() ?>

    <?= $form->field($model, 'ae_y')->textInput() ?>

    <?= $form->field($model, 'bs_x')->textInput() ?>

    <?= $form->field($model, 'bs_y')->textInput() ?>

    <?= $form->field($model, 'as_x')->textInput() ?>

    <?= $form->field($model, 'as_y')->textInput() ?>

    <?= $form->field($model, 'bc_x')->textInput() ?>

    <?= $form->field($model, 'bc_y')->textInput() ?>

    <?= $form->field($model, 'ac_x')->textInput() ?>

    <?= $form->field($model, 'ac_y')->textInput() ?>

    <?= $form->field($model, 'bd_x')->textInput() ?>

    <?= $form->field($model, 'bd_y')->textInput() ?>

    <?= $form->field($model, 'ad_x')->textInput() ?>

    <?= $form->field($model, 'ad_y')->textInput() ?>

    <?= $form->field($model, 'bo_x')->textInput() ?>

    <?= $form->field($model, 'bo_y')->textInput() ?>

    <?= $form->field($model, 'ao_x')->textInput() ?>

    <?= $form->field($model, 'ao_y')->textInput() ?>

    <?= $form->field($model, 'bp_x')->textInput() ?>

    <?= $form->field($model, 'bp_y')->textInput() ?>

    <?= $form->field($model, 'ap_x')->textInput() ?>

    <?= $form->field($model, 'ap_y')->textInput() ?>

    <?= $form->field($model, 'bx_x')->textInput() ?>

    <?= $form->field($model, 'bx_y')->textInput() ?>

    <?= $form->field($model, 'ax_x')->textInput() ?>

    <?= $form->field($model, 'ax_y')->textInput() ?>

    <?= $form->field($model, 'bt_x')->textInput() ?>

    <?= $form->field($model, 'bt_y')->textInput() ?>

    <?= $form->field($model, 'at_x')->textInput() ?>

    <?= $form->field($model, 'at_y')->textInput() ?>

    <?= $form->field($model, 'br_x')->textInput() ?>

    <?= $form->field($model, 'br_y')->textInput() ?>

    <?= $form->field($model, 'ar_x')->textInput() ?>

    <?= $form->field($model, 'ar_y')->textInput() ?>

    <?= $form->field($model, 'oc_x')->textInput() ?>

    <?= $form->field($model, 'oc_y')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
