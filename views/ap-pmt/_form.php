<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ApPmt */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="ap-pmt-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'payment_id')->textInput() ?>

    <?= $form->field($model, 'payment_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'payment_date')->textInput() ?>

    <?= $form->field($model, 'gl_year')->textInput() ?>

    <?= $form->field($model, 'gl_period')->textInput() ?>

    <?= $form->field($model, 'vendor_id')->textInput() ?>

    <?= $form->field($model, 'bank_id')->textInput() ?>

    <?= $form->field($model, 'check_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'currency_id')->textInput() ?>

    <?= $form->field($model, 'exchange_rate')->textInput() ?>

    <?= $form->field($model, 'payment_amount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'check_amount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rounding_amount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'due_date')->textInput() ?>

    <?= $form->field($model, 'posted')->textInput() ?>

    <?= $form->field($model, 'reconciled')->textInput() ?>

    <?= $form->field($model, 'reconciled_time')->textInput() ?>

    <?= $form->field($model, 'void_time')->textInput() ?>

    <?= $form->field($model, 'void')->textInput() ?>

    <?= $form->field($model, 'deposit')->textInput() ?>

    <?= $form->field($model, 'deposit_invoice')->textInput() ?>

    <?= $form->field($model, 'deposit_payment')->textInput() ?>

    <?= $form->field($model, 'dp_amount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'post_dated')->textInput() ?>

    <?= $form->field($model, 'created_user_id')->textInput() ?>

    <?= $form->field($model, 'created_time')->textInput() ?>

    <?= $form->field($model, 'modified_user_id')->textInput() ?>

    <?= $form->field($model, 'modified_time')->textInput() ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'notes')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'rounding_gl_account_id')->textInput() ?>

    <?= $form->field($model, 'printed_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
