<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ReportVar */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="report-var-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'variable_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'variable_value')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'category')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
