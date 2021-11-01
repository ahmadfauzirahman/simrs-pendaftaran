<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SurgerySearch */
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

    <?= $form->field($model, 'reg_id') ?>

    <?= $form->field($model, 'staff_ahli_bedah') ?>

    <?= $form->field($model, 'staff_ahli_anastesi') ?>

    <?= $form->field($model, 'staff_asisten') ?>

    <?= $form->field($model, 'staff_nurse_instrumen') ?>

    <?php // echo $form->field($model, 'diag_pra_op') ?>

    <?php // echo $form->field($model, 'diag_pasca_op') ?>

    <?php // echo $form->field($model, 'jaringan_eksisi') ?>

    <?php // echo $form->field($model, 'pemeriksaan_patologi') ?>

    <?php // echo $form->field($model, 'konsul_op') ?>

    <?php // echo $form->field($model, 'staff_konsul') ?>

    <?php // echo $form->field($model, 'op_name') ?>

    <?php // echo $form->field($model, 'tgl_op') ?>

    <?php // echo $form->field($model, 'start_op') ?>

    <?php // echo $form->field($model, 'end_op') ?>

    <?php // echo $form->field($model, 'end_durasi') ?>

    <?php // echo $form->field($model, 'surgery1') ?>

    <?php // echo $form->field($model, 'surgery2') ?>

    <?php // echo $form->field($model, 'surgery3') ?>

    <?php // echo $form->field($model, 'surgery4') ?>

    <?php // echo $form->field($model, 'klasifikasi_emergensi') ?>

    <?php // echo $form->field($model, 'klasifikasi_elektif') ?>

    <?php // echo $form->field($model, 'klasifikasi_poliklinis') ?>

    <?php // echo $form->field($model, 'klasifikasi_ods') ?>

    <?php // echo $form->field($model, 'klasifikasi_besar') ?>

    <?php // echo $form->field($model, 'klasifikasi_khusus') ?>

    <?php // echo $form->field($model, 'klasifikasi_sedang') ?>

    <?php // echo $form->field($model, 'klasifikasi_kecil') ?>

    <?php // echo $form->field($model, 'report_surgery_id') ?>

    <?php // echo $form->field($model, 'report_name') ?>

    <?php // echo $form->field($model, 'created_user_id') ?>

    <?php // echo $form->field($model, 'created_time') ?>

    <?php // echo $form->field($model, 'modified_user_id') ?>

    <?php // echo $form->field($model, 'modified_time') ?>

    <?php // echo $form->field($model, 'posted') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    </div>
    <!--.col-md-12-->
</div>
