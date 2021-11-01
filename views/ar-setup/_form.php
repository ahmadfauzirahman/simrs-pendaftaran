<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ArSetup */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="ar-setup-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'company_id')->textInput() ?>

    <?= $form->field($model, 'invoice_warehouse_id')->textInput() ?>

    <?= $form->field($model, 'return_warehouse_id')->textInput() ?>

    <?= $form->field($model, 'credit_limit_authority')->textInput() ?>

    <?= $form->field($model, 'ar_inv_gl_jtype_id')->textInput() ?>

    <?= $form->field($model, 'ar_pmt_gl_jtype_id')->textInput() ?>

    <?= $form->field($model, 'ar_inv_reg_gl_type_id')->textInput() ?>

    <?= $form->field($model, 'default_show_invoice')->textInput() ?>

    <?= $form->field($model, 'default_show_payment')->textInput() ?>

    <?= $form->field($model, 'ar_inv_rpt_cat_id')->textInput() ?>

    <?= $form->field($model, 'ar_inv_bind_rpt_cat_id')->textInput() ?>

    <?= $form->field($model, 'ar_pmt_rpt_cat_id')->textInput() ?>

    <?= $form->field($model, 'created_user_id')->textInput() ?>

    <?= $form->field($model, 'created_time')->textInput() ?>

    <?= $form->field($model, 'modified_user_id')->textInput() ?>

    <?= $form->field($model, 'modified_time')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
