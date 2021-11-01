<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PaymentClaimList */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="payment-claim-list-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'payment_id')->textInput() ?>

    <?= $form->field($model, 'seq')->textInput() ?>

    <?= $form->field($model, 'claim_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'claim_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'claim_value')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
