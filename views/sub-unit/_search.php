<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SubUnitSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="row mt-2">
    <div class="col-md-12">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'sub_unit_id') ?>

    <?= $form->field($model, 'update_status') ?>

    <?= $form->field($model, 'duration') ?>

    <?= $form->field($model, 'unlimited_time') ?>

    <?= $form->field($model, 'unit_id') ?>

    <?php // echo $form->field($model, 'sub_unit_name') ?>

    <?php // echo $form->field($model, 'queue_prefix') ?>

    <?php // echo $form->field($model, 'floor_location') ?>

    <?php // echo $form->field($model, 'person_in_charge') ?>

    <?php // echo $form->field($model, 'location_id') ?>

    <?php // echo $form->field($model, 'phone') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'created_user_id') ?>

    <?php // echo $form->field($model, 'created_time') ?>

    <?php // echo $form->field($model, 'modified_user_id') ?>

    <?php // echo $form->field($model, 'modified_time') ?>

    <?php // echo $form->field($model, 'notes') ?>

    <?php // echo $form->field($model, 'patient_limit') ?>

    <?php // echo $form->field($model, 'total_patient_limit') ?>

    <?php // echo $form->field($model, 'max_patient_limit') ?>

    <?php // echo $form->field($model, 'overflow_slot') ?>

    <?php // echo $form->field($model, 'reservation_slot') ?>

    <?php // echo $form->field($model, 'small_icon') ?>

    <?php // echo $form->field($model, 'large_icon') ?>

    <?php // echo $form->field($model, 'warehouse_id') ?>

    <?php // echo $form->field($model, 'primary_doctor_id') ?>

    <?php // echo $form->field($model, 'secondary_doctor_id') ?>

    <?php // echo $form->field($model, 'refer_pharmacy') ?>

    <?php // echo $form->field($model, 'refer_other_exam') ?>

    <?php // echo $form->field($model, 'disabled') ?>

    <?php // echo $form->field($model, 'sex') ?>

    <?php // echo $form->field($model, 'lims_intf') ?>

    <?php // echo $form->field($model, 'unavailable_from') ?>

    <?php // echo $form->field($model, 'unavailable_to') ?>

    <?php // echo $form->field($model, 'unavailable_message') ?>

    <?php // echo $form->field($model, 'refer_sub_unit_code') ?>

    <?php // echo $form->field($model, 'n_day_rsvp_start') ?>

    <?php // echo $form->field($model, 'n_day_rsvp') ?>

    <?php // echo $form->field($model, 'rsvp_got_q_number') ?>

    <?php // echo $form->field($model, 'rsvp_start') ?>

    <?php // echo $form->field($model, 'rsvp_end') ?>

    <?php // echo $form->field($model, 'q_start') ?>

    <?php // echo $form->field($model, 'use_web_reservation') ?>

    <?php // echo $form->field($model, 'sub_unit_unavailable_url') ?>

    <?php // echo $form->field($model, 'sip_no') ?>

    <?php // echo $form->field($model, 'use_arm_reservation') ?>

    <?php // echo $form->field($model, 'status_id') ?>

    <?php // echo $form->field($model, 'reg_id') ?>

    <?php // echo $form->field($model, 'sensus_date') ?>

    <?php // echo $form->field($model, 'time') ?>

    <?php // echo $form->field($model, 'patient_booking') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'renpul') ?>

    <?php // echo $form->field($model, 'desc_ruangan') ?>

    <?php // echo $form->field($model, 'q_no') ?>

    <?php // echo $form->field($model, 'q_date') ?>

    <?php // echo $form->field($model, 'q_play') ?>

    <?php // echo $form->field($model, 'q_view') ?>

    <?php // echo $form->field($model, 'q_mark') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    </div>
    <!--.col-md-12-->
</div>
