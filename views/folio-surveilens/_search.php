<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FolioSurveilensSearch */
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

    <?= $form->field($model, 'tindakan_id') ?>

    <?= $form->field($model, 'registration_id') ?>

    <?= $form->field($model, 'diagnosaMasuk') ?>

    <?= $form->field($model, 'jenisTindakan') ?>

    <?= $form->field($model, 'lokasi') ?>

    <?php // echo $form->field($model, 'tanggalPasang') ?>

    <?php // echo $form->field($model, 'tanggalCabut') ?>

    <?php // echo $form->field($model, 'totalHari') ?>

    <?php // echo $form->field($model, 'tanggalInfeksi') ?>

    <?php // echo $form->field($model, 'catatan') ?>

    <?php // echo $form->field($model, 'diagnosa') ?>

    <?php // echo $form->field($model, 'tanggalOperasi1') ?>

    <?php // echo $form->field($model, 'lamaOperasi1') ?>

    <?php // echo $form->field($model, 'tanggalOperasi2') ?>

    <?php // echo $form->field($model, 'lamaOperasi2') ?>

    <?php // echo $form->field($model, 'jenisOperasi') ?>

    <?php // echo $form->field($model, 'tindakanOperasi') ?>

    <?php // echo $form->field($model, 'asaScore') ?>

    <?php // echo $form->field($model, 'ido') ?>

    <?php // echo $form->field($model, 'idoHari') ?>

    <?php // echo $form->field($model, 'idoKultur') ?>

    <?php // echo $form->field($model, 'isk') ?>

    <?php // echo $form->field($model, 'iskHari') ?>

    <?php // echo $form->field($model, 'iskKultur') ?>

    <?php // echo $form->field($model, 'pneumonia') ?>

    <?php // echo $form->field($model, 'pneumoniaHari') ?>

    <?php // echo $form->field($model, 'pneumoniaKultur') ?>

    <?php // echo $form->field($model, 'iadp') ?>

    <?php // echo $form->field($model, 'iadpHari') ?>

    <?php // echo $form->field($model, 'iadpKultur') ?>

    <?php // echo $form->field($model, 'lain') ?>

    <?php // echo $form->field($model, 'lainHari') ?>

    <?php // echo $form->field($model, 'lainKultur') ?>

    <?php // echo $form->field($model, 'dosis1') ?>

    <?php // echo $form->field($model, 'jmlDosis1') ?>

    <?php // echo $form->field($model, 'tglMulaiDosis1') ?>

    <?php // echo $form->field($model, 'tglSelsaiDosis1') ?>

    <?php // echo $form->field($model, 'dosis2') ?>

    <?php // echo $form->field($model, 'jmlDosis2') ?>

    <?php // echo $form->field($model, 'tglMulaiDosis2') ?>

    <?php // echo $form->field($model, 'tglSelsaiDosis2') ?>

    <?php // echo $form->field($model, 'dosis3') ?>

    <?php // echo $form->field($model, 'jmlDosis3') ?>

    <?php // echo $form->field($model, 'tglMulaiDosis3') ?>

    <?php // echo $form->field($model, 'tglSelsaiDosis3') ?>

    <?php // echo $form->field($model, 'dosis4') ?>

    <?php // echo $form->field($model, 'jmlDosis4') ?>

    <?php // echo $form->field($model, 'tglMulaiDosis4') ?>

    <?php // echo $form->field($model, 'tglSelsaiDosis4') ?>

    <?php // echo $form->field($model, 'waktuPemberian') ?>

    <?php // echo $form->field($model, 'tglPasienKeluar') ?>

    <?php // echo $form->field($model, 'pindahRs') ?>

    <?php // echo $form->field($model, 'diagnosaTerakhir') ?>

    <?php // echo $form->field($model, 'faktorPenyakit') ?>

    <?php // echo $form->field($model, 'radiologi') ?>

    <?php // echo $form->field($model, 'labor') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    </div>
    <!--.col-md-12-->
</div>
