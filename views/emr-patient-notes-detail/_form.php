<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EmrPatientNotesDetail */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="emr-patient-notes-detail-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'patient_notes_id')->textInput() ?>

    <?= $form->field($model, 'notes_seq')->textInput() ?>

    <?= $form->field($model, 'notes_heading')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'notes_heading_seq')->textInput() ?>

    <?= $form->field($model, 'notes_content_type')->textInput() ?>

    <?= $form->field($model, 'notes_content')->textInput() ?>

    <?= $form->field($model, 'notes_report_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
