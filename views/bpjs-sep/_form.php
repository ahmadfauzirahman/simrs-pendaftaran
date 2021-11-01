<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BpjsSep */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="bpjs-sep-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'patient_id')->textInput() ?>

    <?= $form->field($model, 'bpjs_refer_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bpjs_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bpjs_refer_date')->textInput() ?>

    <?= $form->field($model, 'bpjs_date')->textInput() ?>

    <?= $form->field($model, 'bpjs_ppk_type')->textInput() ?>

    <?= $form->field($model, 'bpjs_ppk_perujuk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bpjs_catatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bpjs_diagnosa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bpjs_jns_pelayanan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bpjs_kelas_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bpjs_penjamin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bpjs_peserta_asuransi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bpjs_hak_kelas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bpjs_jns_peserta')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bpjs_kelamin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bpjs_nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bpjs_no_kartu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bpjs_no_mr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bpjs_tgl_lahir')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bpjs_poli')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bpjs_poli_eksekutif')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bpjs_katarak')->textInput() ?>

    <?= $form->field($model, 'bpjs_laka_date')->textInput() ?>

    <?= $form->field($model, 'bpjs_laka_suplesi')->textInput() ?>

    <?= $form->field($model, 'bpjs_laka_suplesi_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bpjs_laka_provinsi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bpjs_laka_kabupaten')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bpjs_laka_kecamatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_skdp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kode_dpjp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bpjs_info_dinsos')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bpjs_info_no_sktm')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bpjs_info_prolanis_prb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'his_registration_id')->textInput() ?>

    <?= $form->field($model, 'his_folio_id')->textInput() ?>

    <?= $form->field($model, 'trans_date')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'bpjs_discharge_date')->textInput() ?>

    <?= $form->field($model, 'trans_discharge_date')->textInput() ?>

    <?= $form->field($model, 'discharge_by')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
