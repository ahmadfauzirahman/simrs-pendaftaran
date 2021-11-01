<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ApInvSearch */
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

    <?= $form->field($model, 'invoice_id') ?>

    <?= $form->field($model, 'invoice_no') ?>

    <?= $form->field($model, 'invoice_date') ?>

    <?= $form->field($model, 'vendor_id') ?>

    <?= $form->field($model, 'gl_year') ?>

    <?php // echo $form->field($model, 'gl_period') ?>

    <?php // echo $form->field($model, 'currency_id') ?>

    <?php // echo $form->field($model, 'location_id') ?>

    <?php // echo $form->field($model, 'exchange_rate') ?>

    <?php // echo $form->field($model, 'taxation_rate') ?>

    <?php // echo $form->field($model, 'items_net_amount') ?>

    <?php // echo $form->field($model, 'invoice_disc_pc') ?>

    <?php // echo $form->field($model, 'invoice_disc_amount') ?>

    <?php // echo $form->field($model, 'invoice_amount') ?>

    <?php // echo $form->field($model, 'owing_amount') ?>

    <?php // echo $form->field($model, 'payment_discount') ?>

    <?php // echo $form->field($model, 'cod') ?>

    <?php // echo $form->field($model, 'disc_pc') ?>

    <?php // echo $form->field($model, 'disc_days') ?>

    <?php // echo $form->field($model, 'net_days') ?>

    <?php // echo $form->field($model, 'tax1_id') ?>

    <?php // echo $form->field($model, 'tax2_id') ?>

    <?php // echo $form->field($model, 'tax1_rate') ?>

    <?php // echo $form->field($model, 'tax2_rate') ?>

    <?php // echo $form->field($model, 'tax1_amount') ?>

    <?php // echo $form->field($model, 'tax2_amount') ?>

    <?php // echo $form->field($model, 'taxable_tax1_id') ?>

    <?php // echo $form->field($model, 'taxable_tax2_id') ?>

    <?php // echo $form->field($model, 'taxable_tax3_id') ?>

    <?php // echo $form->field($model, 'taxable_amount1') ?>

    <?php // echo $form->field($model, 'taxable_amount2') ?>

    <?php // echo $form->field($model, 'taxable_amount3') ?>

    <?php // echo $form->field($model, 'posted') ?>

    <?php // echo $form->field($model, 'orders_no') ?>

    <?php // echo $form->field($model, 'receipts_no') ?>

    <?php // echo $form->field($model, 'return_ref_invoice_id') ?>

    <?php // echo $form->field($model, 'return_ref_invoice_no') ?>

    <?php // echo $form->field($model, 'detail_items') ?>

    <?php // echo $form->field($model, 'notes') ?>

    <?php // echo $form->field($model, 'created_user_id') ?>

    <?php // echo $form->field($model, 'created_time') ?>

    <?php // echo $form->field($model, 'modified_user_id') ?>

    <?php // echo $form->field($model, 'modified_time') ?>

    <?php // echo $form->field($model, 'invoice_type') ?>

    <?php // echo $form->field($model, 'dp_amount') ?>

    <?php // echo $form->field($model, 'tax_invoice_no') ?>

    <?php // echo $form->field($model, 'tax_invoice_date') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    </div>
    <!--.col-md-12-->
</div>
