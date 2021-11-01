<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BillingPmtFolio */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="billing-pmt-folio-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'bill_pmt_id')->textInput() ?>

    <?= $form->field($model, 'folio_id')->textInput() ?>

    <?= $form->field($model, 'amount')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
