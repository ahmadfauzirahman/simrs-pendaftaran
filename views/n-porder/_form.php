<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\NPorder */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="nporder-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'order_id')->textInput() ?>

    <?= $form->field($model, 'vendor_id')->textInput() ?>

    <?= $form->field($model, 'order_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'order_date')->textInput() ?>

    <?= $form->field($model, 'req_received_date')->textInput() ?>

    <?= $form->field($model, 'term_payment')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'carrier_id')->textInput() ?>

    <?= $form->field($model, 'ordered_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'warehouse_id')->textInput() ?>

    <?= $form->field($model, 'order_status')->textInput() ?>

    <?= $form->field($model, 'printed')->textInput() ?>

    <?= $form->field($model, 'currency_id')->textInput() ?>

    <?= $form->field($model, 'category_id')->textInput() ?>

    <?= $form->field($model, 'items_net_amount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'order_amount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tax1_id')->textInput() ?>

    <?= $form->field($model, 'tax2_id')->textInput() ?>

    <?= $form->field($model, 'tax1_rate')->textInput() ?>

    <?= $form->field($model, 'tax2_rate')->textInput() ?>

    <?= $form->field($model, 'tax1_amount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tax2_amount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'taxable_tax1_id')->textInput() ?>

    <?= $form->field($model, 'taxable_tax2_id')->textInput() ?>

    <?= $form->field($model, 'taxable_tax3_id')->textInput() ?>

    <?= $form->field($model, 'taxable_amount1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'taxable_amount2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'taxable_amount3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'order_disc_pc')->textInput() ?>

    <?= $form->field($model, 'order_disc_amount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'shipto')->textInput() ?>

    <?= $form->field($model, 'shipto_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'shipto_address')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'num_of_receipts')->textInput() ?>

    <?= $form->field($model, 'notes')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'created_user_id')->textInput() ?>

    <?= $form->field($model, 'created_time')->textInput() ?>

    <?= $form->field($model, 'modified_user_id')->textInput() ?>

    <?= $form->field($model, 'modified_time')->textInput() ?>

    <?= $form->field($model, 'ap_invoice_id')->textInput() ?>

    <?= $form->field($model, 'items_received')->textInput() ?>

    <?= $form->field($model, 'received_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'paid')->textInput() ?>

    <?= $form->field($model, 'ap_invoice_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bank_id')->textInput() ?>

    <?= $form->field($model, 'request_id')->textInput() ?>

    <?= $form->field($model, 'request_no')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
