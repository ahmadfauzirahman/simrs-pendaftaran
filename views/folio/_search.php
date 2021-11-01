<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FolioSearch */
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

    <?= $form->field($model, 'folio_id') ?>

    <?= $form->field($model, 'folio_no') ?>

    <?= $form->field($model, 'folio_date') ?>

    <?= $form->field($model, 'registration_id') ?>

    <?= $form->field($model, 'dept_id') ?>

    <?php // echo $form->field($model, 'unit_id') ?>

    <?php // echo $form->field($model, 'sub_unit_id') ?>

    <?php // echo $form->field($model, 'service_date') ?>

    <?php // echo $form->field($model, 'service_time') ?>

    <?php // echo $form->field($model, 'amount') ?>

    <?php // echo $form->field($model, 'amount_pmt') ?>

    <?php // echo $form->field($model, 'owing_self') ?>

    <?php // echo $form->field($model, 'self_amount') ?>

    <?php // echo $form->field($model, 'owing_pay_by') ?>

    <?php // echo $form->field($model, 'items_net_amount') ?>

    <?php // echo $form->field($model, 'disc_pc') ?>

    <?php // echo $form->field($model, 'pay_by_amount') ?>

    <?php // echo $form->field($model, 'disc_amount') ?>

    <?php // echo $form->field($model, 'cos_service_id') ?>

    <?php // echo $form->field($model, 'cos_requested_id') ?>

    <?php // echo $form->field($model, 'cos_pay_id') ?>

    <?php // echo $form->field($model, 'folio_status') ?>

    <?php // echo $form->field($model, 'parent_folio_id') ?>

    <?php // echo $form->field($model, 'medical_status') ?>

    <?php // echo $form->field($model, 'anamnesa') ?>

    <?php // echo $form->field($model, 'anamnesa_pic') ?>

    <?php // echo $form->field($model, 'prognosa') ?>

    <?php // echo $form->field($model, 'allergy') ?>

    <?php // echo $form->field($model, 'degenerative') ?>

    <?php // echo $form->field($model, 'notes') ?>

    <?php // echo $form->field($model, 'created_user_id') ?>

    <?php // echo $form->field($model, 'created_time') ?>

    <?php // echo $form->field($model, 'modified_user_id') ?>

    <?php // echo $form->field($model, 'modified_time') ?>

    <?php // echo $form->field($model, 'diagnose') ?>

    <?php // echo $form->field($model, 'procedure_memo') ?>

    <?php // echo $form->field($model, 'pay_by_id') ?>

    <?php // echo $form->field($model, 'tax1_id') ?>

    <?php // echo $form->field($model, 'tax2_id') ?>

    <?php // echo $form->field($model, 'tax1_rate') ?>

    <?php // echo $form->field($model, 'tax2_rate') ?>

    <?php // echo $form->field($model, 'tax1_amount') ?>

    <?php // echo $form->field($model, 'tax2_amount') ?>

    <?php // echo $form->field($model, 'show_all_units') ?>

    <?php // echo $form->field($model, 'primary_doctor_id') ?>

    <?php // echo $form->field($model, 'secondary_doctor_id') ?>

    <?php // echo $form->field($model, 'end_service_date') ?>

    <?php // echo $form->field($model, 'end_service_time') ?>

    <?php // echo $form->field($model, 'view_from_date') ?>

    <?php // echo $form->field($model, 'show_available_day_only') ?>

    <?php // echo $form->field($model, 'view_day_week_month') ?>

    <?php // echo $form->field($model, 'overflow') ?>

    <?php // echo $form->field($model, 'cancellation_reason') ?>

    <?php // echo $form->field($model, 'refer_folio_id') ?>

    <?php // echo $form->field($model, 'physical_exam') ?>

    <?php // echo $form->field($model, 'other_exam_notes') ?>

    <?php // echo $form->field($model, 'q_number') ?>

    <?php // echo $form->field($model, 'validated') ?>

    <?php // echo $form->field($model, 'main_folio_id') ?>

    <?php // echo $form->field($model, 'bpjs_print_no') ?>

    <?php // echo $form->field($model, 'referral_print_no') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    </div>
    <!--.col-md-12-->
</div>
