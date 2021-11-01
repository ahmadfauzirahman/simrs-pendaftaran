<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Kirimlis */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="kirimlis-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'modified_date')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'No_Pasien')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Kode_Kunjungan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Date_of_birth')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'UmurTahun')->textInput() ?>

    <?= $form->field($model, 'UmurBulan')->textInput() ?>

    <?= $form->field($model, 'UmurHari')->textInput() ?>

    <?= $form->field($model, 'Gender')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Alamat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Diagnosa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Tgl_Periksa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Pengirim')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pengirim_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Kelas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kelas_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Ruang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ruang_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Cara_Bayar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cara_bayar_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Kode_Tarif')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'IS_Inap')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'is_update')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'reg_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'labp_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lp_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lab_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_tmp')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
