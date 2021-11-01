<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ReportParam */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="report-param-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'report_id')->textInput() ?>

    <?= $form->field($model, 'param_id')->textInput() ?>

    <?= $form->field($model, 'param_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'param_caption')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'control_id')->textInput() ?>

    <?= $form->field($model, 'default_value')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'order_seq')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
