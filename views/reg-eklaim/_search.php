<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RegEklaimSearch */
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

    <?= $form->field($model, 'registration_id') ?>

    <?= $form->field($model, 'jns_rawat') ?>

    <?= $form->field($model, 'dat_icd_code') ?>

    <?= $form->field($model, 'dat_icd') ?>

    <?= $form->field($model, 'dat_proc_code') ?>

    <?php // echo $form->field($model, 'dat_proc') ?>

    <?php // echo $form->field($model, 'tgl_masuk') ?>

    <?php // echo $form->field($model, 'tgl_keluar') ?>

    <?php // echo $form->field($model, 'unit_name') ?>

    <?php // echo $form->field($model, 'sub_unit_name') ?>

    <?php // echo $form->field($model, 'billing') ?>

    <?php // echo $form->field($model, 'prosedur_non_bedah') ?>

    <?php // echo $form->field($model, 'prosedur_bedah') ?>

    <?php // echo $form->field($model, 'konsultasi') ?>

    <?php // echo $form->field($model, 'tenaga_ahli') ?>

    <?php // echo $form->field($model, 'perawatan') ?>

    <?php // echo $form->field($model, 'penunjang') ?>

    <?php // echo $form->field($model, 'radiologi') ?>

    <?php // echo $form->field($model, 'laboratorium') ?>

    <?php // echo $form->field($model, 'pelayanan_darah') ?>

    <?php // echo $form->field($model, 'rehabilitasi') ?>

    <?php // echo $form->field($model, 'kamar') ?>

    <?php // echo $form->field($model, 'rawat_intensif') ?>

    <?php // echo $form->field($model, 'obat') ?>

    <?php // echo $form->field($model, 'obat_kronis') ?>

    <?php // echo $form->field($model, 'obat_kemoterapi') ?>

    <?php // echo $form->field($model, 'alkes') ?>

    <?php // echo $form->field($model, 'bmhp') ?>

    <?php // echo $form->field($model, 'sewa_alat') ?>

    <?php // echo $form->field($model, 'kelas_rawat') ?>

    <?php // echo $form->field($model, 'adl_sub_acute') ?>

    <?php // echo $form->field($model, 'adl_chronic') ?>

    <?php // echo $form->field($model, 'icu_indikator') ?>

    <?php // echo $form->field($model, 'icu_los') ?>

    <?php // echo $form->field($model, 'ventilator_hour') ?>

    <?php // echo $form->field($model, 'upgrade_class_ind') ?>

    <?php // echo $form->field($model, 'upgrade_class_class') ?>

    <?php // echo $form->field($model, 'upgrade_class_los') ?>

    <?php // echo $form->field($model, 'add_payment_pct') ?>

    <?php // echo $form->field($model, 'birth_weight') ?>

    <?php // echo $form->field($model, 'discharge_status') ?>

    <?php // echo $form->field($model, 'tarif_rs') ?>

    <?php // echo $form->field($model, 'tarif_poli_eks') ?>

    <?php // echo $form->field($model, 'nama_dokter') ?>

    <?php // echo $form->field($model, 'kode_tarif') ?>

    <?php // echo $form->field($model, 'payor_id') ?>

    <?php // echo $form->field($model, 'payor_cd') ?>

    <?php // echo $form->field($model, 'cob_cd') ?>

    <?php // echo $form->field($model, 'coder_nik') ?>

    <?php // echo $form->field($model, 'create_claim') ?>

    <?php // echo $form->field($model, 'update_patient') ?>

    <?php // echo $form->field($model, 'delete_claim') ?>

    <?php // echo $form->field($model, 'delete_patient') ?>

    <?php // echo $form->field($model, 'fill_claim') ?>

    <?php // echo $form->field($model, 'grouper_st1') ?>

    <?php // echo $form->field($model, 'grouper_st2') ?>

    <?php // echo $form->field($model, 'grouper_st1_value') ?>

    <?php // echo $form->field($model, 'grouper_cmg_value') ?>

    <?php // echo $form->field($model, 'grouper_st2_value') ?>

    <?php // echo $form->field($model, 'finalize_claim') ?>

    <?php // echo $form->field($model, 'reedit_claim') ?>

    <?php // echo $form->field($model, 'send_claim') ?>

    <?php // echo $form->field($model, 'status_claim') ?>

    <?php // echo $form->field($model, 'status_claim_value') ?>

    <?php // echo $form->field($model, 'pdf_claim') ?>

    <?php // echo $form->field($model, 'pdf_claim_value') ?>

    <?php // echo $form->field($model, 'detail_claim') ?>

    <?php // echo $form->field($model, 'detail_claim_value') ?>

    <?php // echo $form->field($model, 'create_claim_time') ?>

    <?php // echo $form->field($model, 'update_patient_time') ?>

    <?php // echo $form->field($model, 'delete_claim_time') ?>

    <?php // echo $form->field($model, 'delete_patient_time') ?>

    <?php // echo $form->field($model, 'fill_claim_time') ?>

    <?php // echo $form->field($model, 'grouper_st1_time') ?>

    <?php // echo $form->field($model, 'grouper_st2_time') ?>

    <?php // echo $form->field($model, 'finalize_claim_time') ?>

    <?php // echo $form->field($model, 'reedit_claim_time') ?>

    <?php // echo $form->field($model, 'send_claim_time') ?>

    <?php // echo $form->field($model, 'status_claim_time') ?>

    <?php // echo $form->field($model, 'pdf_claim_time') ?>

    <?php // echo $form->field($model, 'detail_claim_time') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    </div>
    <!--.col-md-12-->
</div>
