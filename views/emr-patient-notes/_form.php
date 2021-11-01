<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EmrPatientNotes */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="emr-patient-notes-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'patient_id')->textInput() ?>

    <?= $form->field($model, 'seq')->textInput() ?>

    <?= $form->field($model, 'patient_notes_id')->textInput() ?>

    <?= $form->field($model, 'notes_status')->textInput() ?>

    <?= $form->field($model, 'notes_description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'notes_created_time')->textInput() ?>

    <?= $form->field($model, 'notes_created_by')->textInput() ?>

    <?= $form->field($model, 'notes_modified_time')->textInput() ?>

    <?= $form->field($model, 'notes_modified_by')->textInput() ?>

    <?= $form->field($model, 'notes_cancelled_time')->textInput() ?>

    <?= $form->field($model, 'notes_cancelled_by')->textInput() ?>

    <?= $form->field($model, 'notes_cancellation_reason')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'notes_cancelled_signature')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'notes_verified_time')->textInput() ?>

    <?= $form->field($model, 'notes_verified_by')->textInput() ?>

    <?= $form->field($model, 'notes_verified_signature')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'notes_cosigned_time')->textInput() ?>

    <?= $form->field($model, 'notes_cosigned_by')->textInput() ?>

    <?= $form->field($model, 'notes_cosigned_signature')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'notes_cosigned2_time')->textInput() ?>

    <?= $form->field($model, 'notes_cosigned2_by')->textInput() ?>

    <?= $form->field($model, 'notes_cosigned2_signature')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'notes_cosigned3_time')->textInput() ?>

    <?= $form->field($model, 'notes_cosigned3_by')->textInput() ?>

    <?= $form->field($model, 'notes_cosigned3_signature')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'notes_cosigned4_time')->textInput() ?>

    <?= $form->field($model, 'notes_cosigned4_by')->textInput() ?>

    <?= $form->field($model, 'notes_cosigned4_signature')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'notes_cosigned5_time')->textInput() ?>

    <?= $form->field($model, 'notes_cosigned5_by')->textInput() ?>

    <?= $form->field($model, 'notes_cosigned5_signature')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
