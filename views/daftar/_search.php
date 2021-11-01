<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DaftarSearch */
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

    <?= $form->field($model, 'id_daftar') ?>

    <?= $form->field($model, 'nomorkartu') ?>

    <?= $form->field($model, 'nik') ?>

    <?= $form->field($model, 'notelp') ?>

    <?= $form->field($model, 'kodepoli') ?>

    <?php // echo $form->field($model, 'nomorreferensi') ?>

    <?php // echo $form->field($model, 'jenisrequest') ?>

    <?php // echo $form->field($model, 'polieksekutif') ?>

    <?php // echo $form->field($model, 'tanggalperiksa') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'jenisreferensi') ?>

    <?php // echo $form->field($model, 'nomorantrian') ?>

    <?php // echo $form->field($model, 'kodebooking') ?>

    <?php // echo $form->field($model, 'jenisantrian') ?>

    <?php // echo $form->field($model, 'estimasidilayani') ?>

    <?php // echo $form->field($model, 'namapoli') ?>

    <?php // echo $form->field($model, 'namadokter') ?>

    <?php // echo $form->field($model, 'create_time') ?>

    <?php // echo $form->field($model, 'ipaddress') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    </div>
    <!--.col-md-12-->
</div>
