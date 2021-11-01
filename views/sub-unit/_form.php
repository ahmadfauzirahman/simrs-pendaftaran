<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SubUnit */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="sub-unit-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'sub_unit_id')->textInput() ?>

    <?= $form->field($model, 'update_status')->textInput() ?>

    <?= $form->field($model, 'duration')->textInput() ?>

    <?= $form->field($model, 'unlimited_time')->textInput() ?>

    <?= $form->field($model, 'unit_id')->textInput() ?>

    <?= $form->field($model, 'sub_unit_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'queue_prefix')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'floor_location')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'person_in_charge')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'location_id')->textInput() ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'created_user_id')->textInput() ?>

    <?= $form->field($model, 'created_time')->textInput() ?>

    <?= $form->field($model, 'modified_user_id')->textInput() ?>

    <?= $form->field($model, 'modified_time')->textInput() ?>

    <?= $form->field($model, 'notes')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'patient_limit')->textInput() ?>

    <?= $form->field($model, 'total_patient_limit')->textInput() ?>

    <?= $form->field($model, 'max_patient_limit')->textInput() ?>

    <?= $form->field($model, 'overflow_slot')->textInput() ?>

    <?= $form->field($model, 'reservation_slot')->textInput() ?>

    <?= $form->field($model, 'small_icon')->textInput() ?>

    <?= $form->field($model, 'large_icon')->textInput() ?>

    <?= $form->field($model, 'warehouse_id')->textInput() ?>

    <?= $form->field($model, 'primary_doctor_id')->textInput() ?>

    <?= $form->field($model, 'secondary_doctor_id')->textInput() ?>

    <?= $form->field($model, 'refer_pharmacy')->textInput() ?>

    <?= $form->field($model, 'refer_other_exam')->textInput() ?>

    <?= $form->field($model, 'disabled')->textInput() ?>

    <?= $form->field($model, 'sex')->textInput() ?>

    <?= $form->field($model, 'lims_intf')->textInput() ?>

    <?= $form->field($model, 'unavailable_from')->textInput() ?>

    <?= $form->field($model, 'unavailable_to')->textInput() ?>

    <?= $form->field($model, 'unavailable_message')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'refer_sub_unit_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'n_day_rsvp_start')->textInput() ?>

    <?= $form->field($model, 'n_day_rsvp')->textInput() ?>

    <?= $form->field($model, 'rsvp_got_q_number')->textInput() ?>

    <?= $form->field($model, 'rsvp_start')->textInput() ?>

    <?= $form->field($model, 'rsvp_end')->textInput() ?>

    <?= $form->field($model, 'q_start')->textInput() ?>

    <?= $form->field($model, 'use_web_reservation')->textInput() ?>

    <?= $form->field($model, 'sub_unit_unavailable_url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sip_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'use_arm_reservation')->textInput() ?>

    <?= $form->field($model, 'status_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'reg_id')->textInput() ?>

    <?= $form->field($model, 'sensus_date')->textInput() ?>

    <?= $form->field($model, 'time')->textInput() ?>

    <?= $form->field($model, 'patient_booking')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'renpul')->textInput() ?>

    <?= $form->field($model, 'desc_ruangan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'q_no')->textInput() ?>

    <?= $form->field($model, 'q_date')->textInput() ?>

    <?= $form->field($model, 'q_play')->textInput() ?>

    <?= $form->field($model, 'q_view')->textInput() ?>

    <?= $form->field($model, 'q_mark')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
