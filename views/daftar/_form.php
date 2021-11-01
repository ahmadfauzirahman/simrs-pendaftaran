<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Daftar */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="daftar-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nomorkartu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nik')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'notelp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kodepoli')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nomorreferensi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jenisrequest')->textInput() ?>

    <?= $form->field($model, 'polieksekutif')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggalperiksa')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'jenisreferensi')->textInput() ?>

    <?= $form->field($model, 'nomorantrian')->textInput() ?>

    <?= $form->field($model, 'kodebooking')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jenisantrian')->textInput() ?>

    <?= $form->field($model, 'estimasidilayani')->textInput() ?>

    <?= $form->field($model, 'namapoli')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'namadokter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'create_time')->textInput() ?>

    <?= $form->field($model, 'ipaddress')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
