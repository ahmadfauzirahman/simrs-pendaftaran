<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FolioSurveilens */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="folio-surveilens-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'registration_id')->textInput() ?>

    <?= $form->field($model, 'diagnosaMasuk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jenisTindakan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lokasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggalPasang')->textInput() ?>

    <?= $form->field($model, 'tanggalCabut')->textInput() ?>

    <?= $form->field($model, 'totalHari')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggalInfeksi')->textInput() ?>

    <?= $form->field($model, 'catatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'diagnosa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggalOperasi1')->textInput() ?>

    <?= $form->field($model, 'lamaOperasi1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggalOperasi2')->textInput() ?>

    <?= $form->field($model, 'lamaOperasi2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jenisOperasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tindakanOperasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'asaScore')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ido')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idoHari')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idoKultur')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'isk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'iskHari')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'iskKultur')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pneumonia')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pneumoniaHari')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pneumoniaKultur')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'iadp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'iadpHari')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'iadpKultur')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lain')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lainHari')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lainKultur')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dosis1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jmlDosis1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tglMulaiDosis1')->textInput() ?>

    <?= $form->field($model, 'tglSelsaiDosis1')->textInput() ?>

    <?= $form->field($model, 'dosis2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jmlDosis2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tglMulaiDosis2')->textInput() ?>

    <?= $form->field($model, 'tglSelsaiDosis2')->textInput() ?>

    <?= $form->field($model, 'dosis3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jmlDosis3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tglMulaiDosis3')->textInput() ?>

    <?= $form->field($model, 'tglSelsaiDosis3')->textInput() ?>

    <?= $form->field($model, 'dosis4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jmlDosis4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tglMulaiDosis4')->textInput() ?>

    <?= $form->field($model, 'tglSelsaiDosis4')->textInput() ?>

    <?= $form->field($model, 'waktuPemberian')->textInput() ?>

    <?= $form->field($model, 'tglPasienKeluar')->textInput() ?>

    <?= $form->field($model, 'pindahRs')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'diagnosaTerakhir')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'faktorPenyakit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'radiologi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'labor')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
