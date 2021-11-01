<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Currency */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="currency-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'currency_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'exchange_rate')->textInput() ?>

    <?= $form->field($model, 'taxation_rate')->textInput() ?>

    <?= $form->field($model, 'symbol')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_user_id')->textInput() ?>

    <?= $form->field($model, 'created_time')->textInput() ?>

    <?= $form->field($model, 'modified_user_id')->textInput() ?>

    <?= $form->field($model, 'modified_time')->textInput() ?>

    <?= $form->field($model, 'exchg_gl_acc_id')->textInput() ?>

    <?= $form->field($model, 'ap_gl_acc_id')->textInput() ?>

    <?= $form->field($model, 'ap_disc_gl_acc_id')->textInput() ?>

    <?= $form->field($model, 'ap_dp_gl_acc_id')->textInput() ?>

    <?= $form->field($model, 'ap_pdc_gl_acc_id')->textInput() ?>

    <?= $form->field($model, 'ar_gl_acc_id')->textInput() ?>

    <?= $form->field($model, 'ar_disc_gl_acc_id')->textInput() ?>

    <?= $form->field($model, 'ar_dp_gl_acc_id')->textInput() ?>

    <?= $form->field($model, 'ar_pdc_gl_acc_id')->textInput() ?>

    <?= $form->field($model, 'pl_gl_acc_id')->textInput() ?>

    <?= $form->field($model, 'rounding_gl_acc_id')->textInput() ?>

    <?= $form->field($model, 'writeoff_gl_acc_id')->textInput() ?>

    <?= $form->field($model, 'rounding_type')->textInput() ?>

    <?= $form->field($model, 'rounding_value')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
