<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\OkupasiXtSearch */
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

    <?= $form->field($model, 'okup_id') ?>

    <?= $form->field($model, 'okup_no') ?>

    <?= $form->field($model, 'okup_tgl') ?>

    <?= $form->field($model, 'patient_id') ?>

    <?= $form->field($model, 'reg_id') ?>

    <?php // echo $form->field($model, 'occupation_id') ?>

    <?php // echo $form->field($model, 'pay_by_id') ?>

    <?php // echo $form->field($model, 'ref_id') ?>

    <?php // echo $form->field($model, 'kondisi_penyakit') ?>

    <?php // echo $form->field($model, 'sesuaitdk') ?>

    <?php // echo $form->field($model, 'rokk') ?>

    <?php // echo $form->field($model, 'a1') ?>

    <?php // echo $form->field($model, 'a2') ?>

    <?php // echo $form->field($model, 'a3') ?>

    <?php // echo $form->field($model, 'a4') ?>

    <?php // echo $form->field($model, 'a5') ?>

    <?php // echo $form->field($model, 'a6') ?>

    <?php // echo $form->field($model, 'a7') ?>

    <?php // echo $form->field($model, 'a8') ?>

    <?php // echo $form->field($model, 'b1') ?>

    <?php // echo $form->field($model, 'b2') ?>

    <?php // echo $form->field($model, 'b3') ?>

    <?php // echo $form->field($model, 'b4') ?>

    <?php // echo $form->field($model, 'b5') ?>

    <?php // echo $form->field($model, 'b6') ?>

    <?php // echo $form->field($model, 'b7') ?>

    <?php // echo $form->field($model, 'b8') ?>

    <?php // echo $form->field($model, 'b9') ?>

    <?php // echo $form->field($model, 'b10') ?>

    <?php // echo $form->field($model, 'b11') ?>

    <?php // echo $form->field($model, 'b12') ?>

    <?php // echo $form->field($model, 'c1') ?>

    <?php // echo $form->field($model, 'c2') ?>

    <?php // echo $form->field($model, 'c3') ?>

    <?php // echo $form->field($model, 'c4') ?>

    <?php // echo $form->field($model, 'c5') ?>

    <?php // echo $form->field($model, 'c6') ?>

    <?php // echo $form->field($model, 'c7') ?>

    <?php // echo $form->field($model, 'c8') ?>

    <?php // echo $form->field($model, 'c9') ?>

    <?php // echo $form->field($model, 'c10') ?>

    <?php // echo $form->field($model, 'c11') ?>

    <?php // echo $form->field($model, 'c12') ?>

    <?php // echo $form->field($model, 'c13') ?>

    <?php // echo $form->field($model, 'd1') ?>

    <?php // echo $form->field($model, 'd2') ?>

    <?php // echo $form->field($model, 'd3') ?>

    <?php // echo $form->field($model, 'd4') ?>

    <?php // echo $form->field($model, 'd5') ?>

    <?php // echo $form->field($model, 'd6') ?>

    <?php // echo $form->field($model, 'd7') ?>

    <?php // echo $form->field($model, 'd8') ?>

    <?php // echo $form->field($model, 'd9') ?>

    <?php // echo $form->field($model, 'd10') ?>

    <?php // echo $form->field($model, 'd11') ?>

    <?php // echo $form->field($model, 'd12') ?>

    <?php // echo $form->field($model, 'd13') ?>

    <?php // echo $form->field($model, 'd14') ?>

    <?php // echo $form->field($model, 'd15') ?>

    <?php // echo $form->field($model, 'd16') ?>

    <?php // echo $form->field($model, 'ok61') ?>

    <?php // echo $form->field($model, 'ok62') ?>

    <?php // echo $form->field($model, 'ok7a1') ?>

    <?php // echo $form->field($model, 'ok7a2') ?>

    <?php // echo $form->field($model, 'ok7b') ?>

    <?php // echo $form->field($model, 'occup2') ?>

    <?php // echo $form->field($model, 'occup3') ?>

    <?php // echo $form->field($model, 'lingkungan') ?>

    <?php // echo $form->field($model, 'posted') ?>

    <?php // echo $form->field($model, 'closing') ?>

    <?php // echo $form->field($model, 'control_date') ?>

    <?php // echo $form->field($model, 'status_kelaikan') ?>

    <?php // echo $form->field($model, 'rekomendasi') ?>

    <?php // echo $form->field($model, 'unit_control_id') ?>

    <?php // echo $form->field($model, 'ket_control') ?>

    <?php // echo $form->field($model, 'didapati') ?>

    <?php // echo $form->field($model, 'diagnosa') ?>

    <?php // echo $form->field($model, 'pm') ?>

    <?php // echo $form->field($model, 'pm2') ?>

    <?php // echo $form->field($model, 'tuntutan') ?>

    <?php // echo $form->field($model, 'mkes') ?>

    <?php // echo $form->field($model, 'fungsi1') ?>

    <?php // echo $form->field($model, 'fungsi2') ?>

    <?php // echo $form->field($model, 'fungsi3') ?>

    <?php // echo $form->field($model, 'risiko') ?>

    <?php // echo $form->field($model, 'rekomendasi2') ?>

    <?php // echo $form->field($model, 'rekomendasi3') ?>

    <?php // echo $form->field($model, 'toleransi') ?>

    <?php // echo $form->field($model, 'numkep') ?>

    <?php // echo $form->field($model, 'created_user_id') ?>

    <?php // echo $form->field($model, 'created_time') ?>

    <?php // echo $form->field($model, 'modified_user_id') ?>

    <?php // echo $form->field($model, 'modified_time') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    </div>
    <!--.col-md-12-->
</div>
