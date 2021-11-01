<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MreceiptRes */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="mreceipt-res-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'receipt_id')->textInput() ?>

    <?= $form->field($model, 'seq')->textInput() ?>

    <?= $form->field($model, 'resource_id')->textInput() ?>

    <?= $form->field($model, 'hour_used')->textInput() ?>

    <?= $form->field($model, 'task')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
