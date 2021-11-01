<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ArSetupSearch */
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

    <?= $form->field($model, 'company_id') ?>

    <?= $form->field($model, 'invoice_warehouse_id') ?>

    <?= $form->field($model, 'return_warehouse_id') ?>

    <?= $form->field($model, 'credit_limit_authority') ?>

    <?= $form->field($model, 'ar_inv_gl_jtype_id') ?>

    <?php // echo $form->field($model, 'ar_pmt_gl_jtype_id') ?>

    <?php // echo $form->field($model, 'ar_inv_reg_gl_type_id') ?>

    <?php // echo $form->field($model, 'default_show_invoice') ?>

    <?php // echo $form->field($model, 'default_show_payment') ?>

    <?php // echo $form->field($model, 'ar_inv_rpt_cat_id') ?>

    <?php // echo $form->field($model, 'ar_inv_bind_rpt_cat_id') ?>

    <?php // echo $form->field($model, 'ar_pmt_rpt_cat_id') ?>

    <?php // echo $form->field($model, 'created_user_id') ?>

    <?php // echo $form->field($model, 'created_time') ?>

    <?php // echo $form->field($model, 'modified_user_id') ?>

    <?php // echo $form->field($model, 'modified_time') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    </div>
    <!--.col-md-12-->
</div>
