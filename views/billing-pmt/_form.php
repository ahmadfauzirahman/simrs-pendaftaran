<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BillingPmt */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="billing-pmt-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'bill_pmt_id')->textInput() ?>

    <?= $form->field($model, 'bill_pmt_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bill_pmt_date')->textInput() ?>

    <?= $form->field($model, 'payment_type')->textInput() ?>

    <?= $form->field($model, 'amount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'registration_id')->textInput() ?>

    <?= $form->field($model, 'pay_by')->textInput() ?>

    <?= $form->field($model, 'notes')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'print_no')->textInput() ?>

    <?= $form->field($model, 'all_print_no')->textInput() ?>

    <?= $form->field($model, 'created_user_id')->textInput() ?>

    <?= $form->field($model, 'created_time')->textInput() ?>

    <?= $form->field($model, 'modified_user_id')->textInput() ?>

    <?= $form->field($model, 'modified_time')->textInput() ?>

    <?= $form->field($model, 'bill_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bill_status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_bill')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
