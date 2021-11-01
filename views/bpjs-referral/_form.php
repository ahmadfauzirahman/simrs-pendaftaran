<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BpjsReferral */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="bpjs-referral-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'patient_id')->textInput() ?>

    <?= $form->field($model, 'bpjs_refer_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bpjs_refer_date')->textInput() ?>

    <?= $form->field($model, 'bpjs_refer_from')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bpjs_refer_from_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bpjs_refer_to')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bpjs_refer_to_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bpjs_service')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bpjs_service_to')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bpjs_service_cos')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bpjs_from_diagnose_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bpjs_from_diagnose')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bpjs_from_cause')->textInput() ?>

    <?= $form->field($model, 'bpjs_from_location')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bpjs_notes')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'verified_by')->textInput() ?>

    <?= $form->field($model, 'verified_time')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'rujukan_intern')->textInput() ?>

    <?= $form->field($model, 'no_skdp')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
