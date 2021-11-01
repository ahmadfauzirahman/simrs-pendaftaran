<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Registration */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="registration-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'registration_id')->textInput() ?>

    <?= $form->field($model, 'patient_id')->textInput() ?>

    <?= $form->field($model, 'registration_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'registration_date')->textInput() ?>

    <?= $form->field($model, 'pay_by_id')->textInput() ?>

    <?= $form->field($model, 'contact_seq_pay')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'pay_by_amount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'self_amount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'amount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'owing_pay_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'owing_self')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'first_folio_id')->textInput() ?>

    <?= $form->field($model, 'refer_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'refer_from_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'refer_from_date')->textInput() ?>

    <?= $form->field($model, 'refer_from_doctor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'refer_from_hospital')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'refer_from_diagnose_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'refer_from_diagnose')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'refer_from_cause')->textInput() ?>

    <?= $form->field($model, 'notes')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'created_user_id')->textInput() ?>

    <?= $form->field($model, 'created_time')->textInput() ?>

    <?= $form->field($model, 'modified_user_id')->textInput() ?>

    <?= $form->field($model, 'modified_time')->textInput() ?>

    <?= $form->field($model, 'excess_by_patient')->textInput() ?>

    <?= $form->field($model, 'ref_type_id')->textInput() ?>

    <?= $form->field($model, 'q_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'reservation_date')->textInput() ?>

    <?= $form->field($model, 'main_folio_id')->textInput() ?>

    <?= $form->field($model, 'dept_id')->textInput() ?>

    <?= $form->field($model, 'status_id')->textInput() ?>

    <?= $form->field($model, 'status_patient')->textInput() ?>

    <?= $form->field($model, 'bpjs_verified_by')->textInput() ?>

    <?= $form->field($model, 'bpjs_verfied_time')->textInput() ?>

    <?= $form->field($model, 'reg_bpjs_verified_by')->textInput() ?>

    <?= $form->field($model, 'reg_bpjs_verified_time')->textInput() ?>

    <?= $form->field($model, 'reg_bpjs_discharge_by')->textInput() ?>

    <?= $form->field($model, 'reg_bpjs_discharge_time')->textInput() ?>

    <?= $form->field($model, 'reg_bpjs_discharge_notes')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'apotik_id')->textInput() ?>

    <?= $form->field($model, 'reg_end_date')->textInput() ?>

    <?= $form->field($model, 'new_reg')->textInput() ?>

    <?= $form->field($model, 'main_dept_id')->textInput() ?>

    <?= $form->field($model, 'aproval_ffs_is')->textInput() ?>

    <?= $form->field($model, 'sep_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'episode')->textInput() ?>

    <?= $form->field($model, 'ffs_date')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
