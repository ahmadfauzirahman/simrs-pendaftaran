<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\NPrequest */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="nprequest-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'request_id')->textInput() ?>

    <?= $form->field($model, 'request_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'warehouse_id')->textInput() ?>

    <?= $form->field($model, 'request_date')->textInput() ?>

    <?= $form->field($model, 'requested_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'request_notes')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'request_status')->textInput() ?>

    <?= $form->field($model, 'requested_date')->textInput() ?>

    <?= $form->field($model, 'order_id')->textInput() ?>

    <?= $form->field($model, 'num_of_orders')->textInput() ?>

    <?= $form->field($model, 'notes')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
