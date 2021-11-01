<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Folio */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="folio-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'folio_id')->textInput() ?>

    <?= $form->field($model, 'folio_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'folio_date')->textInput() ?>

    <?= $form->field($model, 'registration_id')->textInput() ?>

    <?= $form->field($model, 'dept_id')->textInput() ?>

    <?= $form->field($model, 'unit_id')->textInput() ?>

    <?= $form->field($model, 'sub_unit_id')->textInput() ?>

    <?= $form->field($model, 'service_date')->textInput() ?>

    <?= $form->field($model, 'service_time')->textInput() ?>

    <?= $form->field($model, 'amount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'amount_pmt')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'owing_self')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'self_amount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'owing_pay_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'items_net_amount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'disc_pc')->textInput() ?>

    <?= $form->field($model, 'pay_by_amount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'disc_amount')->textInput() ?>

    <?= $form->field($model, 'cos_service_id')->textInput() ?>

    <?= $form->field($model, 'cos_requested_id')->textInput() ?>

    <?= $form->field($model, 'cos_pay_id')->textInput() ?>

    <?= $form->field($model, 'folio_status')->textInput() ?>

    <?= $form->field($model, 'parent_folio_id')->textInput() ?>

    <?= $form->field($model, 'medical_status')->textInput() ?>

    <?= $form->field($model, 'anamnesa')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'anamnesa_pic')->textInput() ?>

    <?= $form->field($model, 'prognosa')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'allergy')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'degenerative')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'notes')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'created_user_id')->textInput() ?>

    <?= $form->field($model, 'created_time')->textInput() ?>

    <?= $form->field($model, 'modified_user_id')->textInput() ?>

    <?= $form->field($model, 'modified_time')->textInput() ?>

    <?= $form->field($model, 'diagnose')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'procedure_memo')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'pay_by_id')->textInput() ?>

    <?= $form->field($model, 'tax1_id')->textInput() ?>

    <?= $form->field($model, 'tax2_id')->textInput() ?>

    <?= $form->field($model, 'tax1_rate')->textInput() ?>

    <?= $form->field($model, 'tax2_rate')->textInput() ?>

    <?= $form->field($model, 'tax1_amount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tax2_amount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'show_all_units')->textInput() ?>

    <?= $form->field($model, 'primary_doctor_id')->textInput() ?>

    <?= $form->field($model, 'secondary_doctor_id')->textInput() ?>

    <?= $form->field($model, 'end_service_date')->textInput() ?>

    <?= $form->field($model, 'end_service_time')->textInput() ?>

    <?= $form->field($model, 'view_from_date')->textInput() ?>

    <?= $form->field($model, 'show_available_day_only')->textInput() ?>

    <?= $form->field($model, 'view_day_week_month')->textInput() ?>

    <?= $form->field($model, 'overflow')->textInput() ?>

    <?= $form->field($model, 'cancellation_reason')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'refer_folio_id')->textInput() ?>

    <?= $form->field($model, 'physical_exam')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'other_exam_notes')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'q_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'validated')->textInput() ?>

    <?= $form->field($model, 'main_folio_id')->textInput() ?>

    <?= $form->field($model, 'bpjs_print_no')->textInput() ?>

    <?= $form->field($model, 'referral_print_no')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
