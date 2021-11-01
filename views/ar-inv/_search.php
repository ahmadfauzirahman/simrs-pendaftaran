<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ArInvSearch */
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

    <?= $form->field($model, 'gl_year') ?>

    <?= $form->field($model, 'gl_period') ?>

    <?php // echo $form->field($model, 'customer_id') ?>

    <?php // echo $form->field($model, 'warehouse_id') ?>

    <?php // echo $form->field($model, 'salesman_id') ?>

    <?php // echo $form->field($model, 'currency_id') ?>

    <?php // echo $form->field($model, 'location_id') ?>

    <?php // echo $form->field($model, 'exchange_rate') ?>

    <?php // echo $form->field($model, 'taxation_rate') ?>

    <?php // echo $form->field($model, 'disc_days') ?>

    <?php // echo $form->field($model, 'disc_pc') ?>

    <?php // echo $form->field($model, 'net_days') ?>

    <?php // echo $form->field($model, 'cod') ?>

    <?php // echo $form->field($model, 'items_net_amount') ?>

    <?php // echo $form->field($model, 'invoice_disc_pc') ?>

    <?php // echo $form->field($model, 'invoice_disc_amount') ?>

    <?php // echo $form->field($model, 'invoice_amount') ?>

    <?php // echo $form->field($model, 'writeoff_amount') ?>

    <?php // echo $form->field($model, 'owing_amount') ?>

    <?php // echo $form->field($model, 'payment_discount') ?>

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

    <?php // echo $form->field($model, 'printed') ?>

    <?php // echo $form->field($model, 'purchase_order_no') ?>

    <?php // echo $form->field($model, 'shipto_name') ?>

    <?php // echo $form->field($model, 'shipto_address') ?>

    <?php // echo $form->field($model, 'return_invoice') ?>

    <?php // echo $form->field($model, 'return_ref_invoice_id') ?>

    <?php // echo $form->field($model, 'return_ref_invoice_no') ?>

    <?php // echo $form->field($model, 'authorized_user_id') ?>

    <?php // echo $form->field($model, 'authorized_reason') ?>

    <?php // echo $form->field($model, 'notes') ?>

    <?php // echo $form->field($model, 'pic_pay_id') ?>

    <?php // echo $form->field($model, 'created_user_id') ?>

    <?php // echo $form->field($model, 'created_time') ?>

    <?php // echo $form->field($model, 'modified_user_id') ?>

    <?php // echo $form->field($model, 'modified_time') ?>

    <?php // echo $form->field($model, 'invoice_type') ?>

    <?php // echo $form->field($model, 'dp_amount') ?>

    <?php // echo $form->field($model, 'invoice_content') ?>

    <?php // echo $form->field($model, 'tax_invoice_no') ?>

    <?php // echo $form->field($model, 'tax_invoice_date') ?>

    <?php // echo $form->field($model, 'invoice_send_date') ?>

    <?php // echo $form->field($model, 'invoice_receive_date') ?>

    <?php // echo $form->field($model, 'invoice_return_date') ?>

    <?php // echo $form->field($model, 'ship_from') ?>

    <?php // echo $form->field($model, 'ship_until') ?>

    <?php // echo $form->field($model, 'staff_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    </div>
    <!--.col-md-12-->
</div>
