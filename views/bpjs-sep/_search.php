<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BpjsSepSearch */
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

    <?= $form->field($model, 'patient_id') ?>

    <?= $form->field($model, 'bpjs_refer_no') ?>

    <?= $form->field($model, 'bpjs_no') ?>

    <?= $form->field($model, 'bpjs_refer_date') ?>

    <?= $form->field($model, 'bpjs_date') ?>

    <?php // echo $form->field($model, 'bpjs_ppk_type') ?>

    <?php // echo $form->field($model, 'bpjs_ppk_perujuk') ?>

    <?php // echo $form->field($model, 'bpjs_catatan') ?>

    <?php // echo $form->field($model, 'bpjs_diagnosa') ?>

    <?php // echo $form->field($model, 'bpjs_jns_pelayanan') ?>

    <?php // echo $form->field($model, 'bpjs_kelas_rawat') ?>

    <?php // echo $form->field($model, 'bpjs_penjamin') ?>

    <?php // echo $form->field($model, 'bpjs_peserta_asuransi') ?>

    <?php // echo $form->field($model, 'bpjs_hak_kelas') ?>

    <?php // echo $form->field($model, 'bpjs_jns_peserta') ?>

    <?php // echo $form->field($model, 'bpjs_kelamin') ?>

    <?php // echo $form->field($model, 'bpjs_nama') ?>

    <?php // echo $form->field($model, 'bpjs_no_kartu') ?>

    <?php // echo $form->field($model, 'bpjs_no_mr') ?>

    <?php // echo $form->field($model, 'bpjs_tgl_lahir') ?>

    <?php // echo $form->field($model, 'bpjs_poli') ?>

    <?php // echo $form->field($model, 'bpjs_poli_eksekutif') ?>

    <?php // echo $form->field($model, 'bpjs_katarak') ?>

    <?php // echo $form->field($model, 'bpjs_laka_date') ?>

    <?php // echo $form->field($model, 'bpjs_laka_suplesi') ?>

    <?php // echo $form->field($model, 'bpjs_laka_suplesi_no') ?>

    <?php // echo $form->field($model, 'bpjs_laka_provinsi') ?>

    <?php // echo $form->field($model, 'bpjs_laka_kabupaten') ?>

    <?php // echo $form->field($model, 'bpjs_laka_kecamatan') ?>

    <?php // echo $form->field($model, 'no_skdp') ?>

    <?php // echo $form->field($model, 'kode_dpjp') ?>

    <?php // echo $form->field($model, 'bpjs_info_dinsos') ?>

    <?php // echo $form->field($model, 'bpjs_info_no_sktm') ?>

    <?php // echo $form->field($model, 'bpjs_info_prolanis_prb') ?>

    <?php // echo $form->field($model, 'user_id') ?>

    <?php // echo $form->field($model, 'his_registration_id') ?>

    <?php // echo $form->field($model, 'his_folio_id') ?>

    <?php // echo $form->field($model, 'trans_date') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'bpjs_discharge_date') ?>

    <?php // echo $form->field($model, 'trans_discharge_date') ?>

    <?php // echo $form->field($model, 'discharge_by') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    </div>
    <!--.col-md-12-->
</div>
