<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EmrContent */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="emr-content-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'notes_content_type')->textInput() ?>

    <?= $form->field($model, 'notes_content_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'notes_functions')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'notes_content')->textInput() ?>

    <?= $form->field($model, 'notes_report_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
