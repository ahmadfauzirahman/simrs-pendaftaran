<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Regeklaim */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="regeklaim-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'registration_id')->textInput() ?>

    <?= $form->field($model, 'jns_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dat_icd_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dat_icd')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'dat_proc_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dat_proc')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'tgl_masuk')->textInput() ?>

    <?= $form->field($model, 'tgl_keluar')->textInput() ?>

    <?= $form->field($model, 'unit_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sub_unit_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'billing')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'prosedur_non_bedah')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'prosedur_bedah')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'konsultasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tenaga_ahli')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'perawatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'penunjang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'radiologi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'laboratorium')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pelayanan_darah')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rehabilitasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kamar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rawat_intensif')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'obat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'obat_kronis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'obat_kemoterapi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alkes')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bmhp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sewa_alat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kelas_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'adl_sub_acute')->textInput() ?>

    <?= $form->field($model, 'adl_chronic')->textInput() ?>

    <?= $form->field($model, 'icu_indikator')->textInput() ?>

    <?= $form->field($model, 'icu_los')->textInput() ?>

    <?= $form->field($model, 'ventilator_hour')->textInput() ?>

    <?= $form->field($model, 'upgrade_class_ind')->textInput() ?>

    <?= $form->field($model, 'upgrade_class_class')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'upgrade_class_los')->textInput() ?>

    <?= $form->field($model, 'add_payment_pct')->textInput() ?>

    <?= $form->field($model, 'birth_weight')->textInput() ?>

    <?= $form->field($model, 'discharge_status')->textInput() ?>

    <?= $form->field($model, 'tarif_rs')->textInput() ?>

    <?= $form->field($model, 'tarif_poli_eks')->textInput() ?>

    <?= $form->field($model, 'nama_dokter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kode_tarif')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'payor_id')->textInput() ?>

    <?= $form->field($model, 'payor_cd')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cob_cd')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'coder_nik')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'create_claim')->textInput() ?>

    <?= $form->field($model, 'update_patient')->textInput() ?>

    <?= $form->field($model, 'delete_claim')->textInput() ?>

    <?= $form->field($model, 'delete_patient')->textInput() ?>

    <?= $form->field($model, 'fill_claim')->textInput() ?>

    <?= $form->field($model, 'grouper_st1')->textInput() ?>

    <?= $form->field($model, 'grouper_st2')->textInput() ?>

    <?= $form->field($model, 'grouper_st1_value')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'grouper_cmg_value')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'grouper_st2_value')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'finalize_claim')->textInput() ?>

    <?= $form->field($model, 'reedit_claim')->textInput() ?>

    <?= $form->field($model, 'send_claim')->textInput() ?>

    <?= $form->field($model, 'status_claim')->textInput() ?>

    <?= $form->field($model, 'status_claim_value')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'pdf_claim')->textInput() ?>

    <?= $form->field($model, 'pdf_claim_value')->textInput() ?>

    <?= $form->field($model, 'detail_claim')->textInput() ?>

    <?= $form->field($model, 'detail_claim_value')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'create_claim_time')->textInput() ?>

    <?= $form->field($model, 'update_patient_time')->textInput() ?>

    <?= $form->field($model, 'delete_claim_time')->textInput() ?>

    <?= $form->field($model, 'delete_patient_time')->textInput() ?>

    <?= $form->field($model, 'fill_claim_time')->textInput() ?>

    <?= $form->field($model, 'grouper_st1_time')->textInput() ?>

    <?= $form->field($model, 'grouper_st2_time')->textInput() ?>

    <?= $form->field($model, 'finalize_claim_time')->textInput() ?>

    <?= $form->field($model, 'reedit_claim_time')->textInput() ?>

    <?= $form->field($model, 'send_claim_time')->textInput() ?>

    <?= $form->field($model, 'status_claim_time')->textInput() ?>

    <?= $form->field($model, 'pdf_claim_time')->textInput() ?>

    <?= $form->field($model, 'detail_claim_time')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
