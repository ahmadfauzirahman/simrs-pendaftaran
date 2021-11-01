<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\KirimlisSearch */
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

    <?= $form->field($model, 'kode') ?>

    <?= $form->field($model, 'modified_date') ?>

    <?= $form->field($model, 'No_Pasien') ?>

    <?= $form->field($model, 'Kode_Kunjungan') ?>

    <?= $form->field($model, 'Nama') ?>

    <?php // echo $form->field($model, 'Email') ?>

    <?php // echo $form->field($model, 'Date_of_birth') ?>

    <?php // echo $form->field($model, 'UmurTahun') ?>

    <?php // echo $form->field($model, 'UmurBulan') ?>

    <?php // echo $form->field($model, 'UmurHari') ?>

    <?php // echo $form->field($model, 'Gender') ?>

    <?php // echo $form->field($model, 'Alamat') ?>

    <?php // echo $form->field($model, 'Diagnosa') ?>

    <?php // echo $form->field($model, 'Tgl_Periksa') ?>

    <?php // echo $form->field($model, 'Pengirim') ?>

    <?php // echo $form->field($model, 'pengirim_name') ?>

    <?php // echo $form->field($model, 'Kelas') ?>

    <?php // echo $form->field($model, 'kelas_name') ?>

    <?php // echo $form->field($model, 'Ruang') ?>

    <?php // echo $form->field($model, 'ruang_name') ?>

    <?php // echo $form->field($model, 'Cara_Bayar') ?>

    <?php // echo $form->field($model, 'cara_bayar_name') ?>

    <?php // echo $form->field($model, 'Kode_Tarif') ?>

    <?php // echo $form->field($model, 'IS_Inap') ?>

    <?php // echo $form->field($model, 'Status') ?>

    <?php // echo $form->field($model, 'is_update') ?>

    <?php // echo $form->field($model, 'reg_no') ?>

    <?php // echo $form->field($model, 'labp_id') ?>

    <?php // echo $form->field($model, 'lp_id') ?>

    <?php // echo $form->field($model, 'lab_id') ?>

    <?php // echo $form->field($model, 'id_tmp') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    </div>
    <!--.col-md-12-->
</div>
