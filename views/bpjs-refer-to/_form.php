<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BpjsReferTo */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="bpjs-refer-to-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'folio_id')->textInput() ?>

    <?= $form->field($model, 'patient_id')->textInput() ?>

    <?= $form->field($model, 'refer_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'refer_service')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'refer_notes')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'refer_from_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'refer_from_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'refer_diag_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'refer_diag_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'refer_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'refer_date')->textInput() ?>

    <?= $form->field($model, 'refer_patient_insurance')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'refer_patient_cos')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'refer_patient_jenis_peserta')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'refer_patient_sex')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'refer_patient_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'refer_patient_card_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'refer_patient_medrec')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'refer_patient_birth_date')->textInput() ?>

    <?= $form->field($model, 'refer_to_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'refer_to_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'refer_to_clinic')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'refer_to_clinic_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_by')->textInput() ?>

    <?= $form->field($model, 'created_time')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
