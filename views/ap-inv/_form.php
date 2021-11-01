<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ApInv */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="ap-inv-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'invoice_id')->textInput() ?>

    <?= $form->field($model, 'invoice_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'invoice_date')->textInput() ?>

    <?= $form->field($model, 'vendor_id')->textInput() ?>

    <?= $form->field($model, 'gl_year')->textInput() ?>

    <?= $form->field($model, 'gl_period')->textInput() ?>

    <?= $form->field($model, 'currency_id')->textInput() ?>

    <?= $form->field($model, 'location_id')->textInput() ?>

    <?= $form->field($model, 'exchange_rate')->textInput() ?>

    <?= $form->field($model, 'taxation_rate')->textInput() ?>

    <?= $form->field($model, 'items_net_amount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'invoice_disc_pc')->textInput() ?>

    <?= $form->field($model, 'invoice_disc_amount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'invoice_amount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'owing_amount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'payment_discount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cod')->textInput() ?>

    <?= $form->field($model, 'disc_pc')->textInput() ?>

    <?= $form->field($model, 'disc_days')->textInput() ?>

    <?= $form->field($model, 'net_days')->textInput() ?>

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

    <?= $form->field($model, 'posted')->textInput() ?>

    <?= $form->field($model, 'orders_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'receipts_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'return_ref_invoice_id')->textInput() ?>

    <?= $form->field($model, 'return_ref_invoice_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'detail_items')->textInput() ?>

    <?= $form->field($model, 'notes')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'created_user_id')->textInput() ?>

    <?= $form->field($model, 'created_time')->textInput() ?>

    <?= $form->field($model, 'modified_user_id')->textInput() ?>

    <?= $form->field($model, 'modified_time')->textInput() ?>

    <?= $form->field($model, 'invoice_type')->textInput() ?>

    <?= $form->field($model, 'dp_amount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tax_invoice_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tax_invoice_date')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
