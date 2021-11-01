<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\OkupasiXt */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="okupasi-xt-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'okup_id')->textInput() ?>

    <?= $form->field($model, 'okup_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'okup_tgl')->textInput() ?>

    <?= $form->field($model, 'patient_id')->textInput() ?>

    <?= $form->field($model, 'reg_id')->textInput() ?>

    <?= $form->field($model, 'occupation_id')->textInput() ?>

    <?= $form->field($model, 'pay_by_id')->textInput() ?>

    <?= $form->field($model, 'ref_id')->textInput() ?>

    <?= $form->field($model, 'kondisi_penyakit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sesuaitdk')->textInput() ?>

    <?= $form->field($model, 'rokk')->textInput() ?>

    <?= $form->field($model, 'a1')->textInput() ?>

    <?= $form->field($model, 'a2')->textInput() ?>

    <?= $form->field($model, 'a3')->textInput() ?>

    <?= $form->field($model, 'a4')->textInput() ?>

    <?= $form->field($model, 'a5')->textInput() ?>

    <?= $form->field($model, 'a6')->textInput() ?>

    <?= $form->field($model, 'a7')->textInput() ?>

    <?= $form->field($model, 'a8')->textInput() ?>

    <?= $form->field($model, 'b1')->textInput() ?>

    <?= $form->field($model, 'b2')->textInput() ?>

    <?= $form->field($model, 'b3')->textInput() ?>

    <?= $form->field($model, 'b4')->textInput() ?>

    <?= $form->field($model, 'b5')->textInput() ?>

    <?= $form->field($model, 'b6')->textInput() ?>

    <?= $form->field($model, 'b7')->textInput() ?>

    <?= $form->field($model, 'b8')->textInput() ?>

    <?= $form->field($model, 'b9')->textInput() ?>

    <?= $form->field($model, 'b10')->textInput() ?>

    <?= $form->field($model, 'b11')->textInput() ?>

    <?= $form->field($model, 'b12')->textInput() ?>

    <?= $form->field($model, 'c1')->textInput() ?>

    <?= $form->field($model, 'c2')->textInput() ?>

    <?= $form->field($model, 'c3')->textInput() ?>

    <?= $form->field($model, 'c4')->textInput() ?>

    <?= $form->field($model, 'c5')->textInput() ?>

    <?= $form->field($model, 'c6')->textInput() ?>

    <?= $form->field($model, 'c7')->textInput() ?>

    <?= $form->field($model, 'c8')->textInput() ?>

    <?= $form->field($model, 'c9')->textInput() ?>

    <?= $form->field($model, 'c10')->textInput() ?>

    <?= $form->field($model, 'c11')->textInput() ?>

    <?= $form->field($model, 'c12')->textInput() ?>

    <?= $form->field($model, 'c13')->textInput() ?>

    <?= $form->field($model, 'd1')->textInput() ?>

    <?= $form->field($model, 'd2')->textInput() ?>

    <?= $form->field($model, 'd3')->textInput() ?>

    <?= $form->field($model, 'd4')->textInput() ?>

    <?= $form->field($model, 'd5')->textInput() ?>

    <?= $form->field($model, 'd6')->textInput() ?>

    <?= $form->field($model, 'd7')->textInput() ?>

    <?= $form->field($model, 'd8')->textInput() ?>

    <?= $form->field($model, 'd9')->textInput() ?>

    <?= $form->field($model, 'd10')->textInput() ?>

    <?= $form->field($model, 'd11')->textInput() ?>

    <?= $form->field($model, 'd12')->textInput() ?>

    <?= $form->field($model, 'd13')->textInput() ?>

    <?= $form->field($model, 'd14')->textInput() ?>

    <?= $form->field($model, 'd15')->textInput() ?>

    <?= $form->field($model, 'd16')->textInput() ?>

    <?= $form->field($model, 'ok61')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ok62')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ok7a1')->textInput() ?>

    <?= $form->field($model, 'ok7a2')->textInput() ?>

    <?= $form->field($model, 'ok7b')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'occup2')->textInput() ?>

    <?= $form->field($model, 'occup3')->textInput() ?>

    <?= $form->field($model, 'lingkungan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'posted')->textInput() ?>

    <?= $form->field($model, 'closing')->textInput() ?>

    <?= $form->field($model, 'control_date')->textInput() ?>

    <?= $form->field($model, 'status_kelaikan')->textInput() ?>

    <?= $form->field($model, 'rekomendasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'unit_control_id')->textInput() ?>

    <?= $form->field($model, 'ket_control')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'didapati')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'diagnosa')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'pm')->textInput() ?>

    <?= $form->field($model, 'pm2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tuntutan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mkes')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fungsi1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fungsi2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fungsi3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'risiko')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rekomendasi2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rekomendasi3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'toleransi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'numkep')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_user_id')->textInput() ?>

    <?= $form->field($model, 'created_time')->textInput() ?>

    <?= $form->field($model, 'modified_user_id')->textInput() ?>

    <?= $form->field($model, 'modified_time')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
