<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\InPatientTreatment */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="in-patient-treatment-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'registration_id')->textInput() ?>

    <?= $form->field($model, 'patient_id')->textInput() ?>

    <?= $form->field($model, 'folio_id')->textInput() ?>

    <?= $form->field($model, 'dept_id')->textInput() ?>

    <?= $form->field($model, 'unit_id')->textInput() ?>

    <?= $form->field($model, 'sub_unit_id')->textInput() ?>

    <?= $form->field($model, 'primary_dokter_id')->textInput() ?>

    <?= $form->field($model, 'service_date')->textInput() ?>

    <?= $form->field($model, 'trans_date')->textInput() ?>

    <?= $form->field($model, 'created_time')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
