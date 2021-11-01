<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Surgery */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="surgery-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'reg_id')->textInput() ?>

    <?= $form->field($model, 'staff_ahli_bedah')->textInput() ?>

    <?= $form->field($model, 'staff_ahli_anastesi')->textInput() ?>

    <?= $form->field($model, 'staff_asisten')->textInput() ?>

    <?= $form->field($model, 'staff_nurse_instrumen')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'diag_pra_op')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'diag_pasca_op')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'jaringan_eksisi')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'pemeriksaan_patologi')->textInput() ?>

    <?= $form->field($model, 'konsul_op')->textInput() ?>

    <?= $form->field($model, 'staff_konsul')->textInput() ?>

    <?= $form->field($model, 'op_name')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'tgl_op')->textInput() ?>

    <?= $form->field($model, 'start_op')->textInput() ?>

    <?= $form->field($model, 'end_op')->textInput() ?>

    <?= $form->field($model, 'end_durasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'surgery1')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'surgery2')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'surgery3')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'surgery4')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'klasifikasi_emergensi')->textInput() ?>

    <?= $form->field($model, 'klasifikasi_elektif')->textInput() ?>

    <?= $form->field($model, 'klasifikasi_poliklinis')->textInput() ?>

    <?= $form->field($model, 'klasifikasi_ods')->textInput() ?>

    <?= $form->field($model, 'klasifikasi_besar')->textInput() ?>

    <?= $form->field($model, 'klasifikasi_khusus')->textInput() ?>

    <?= $form->field($model, 'klasifikasi_sedang')->textInput() ?>

    <?= $form->field($model, 'klasifikasi_kecil')->textInput() ?>

    <?= $form->field($model, 'report_surgery_id')->textInput() ?>

    <?= $form->field($model, 'report_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_user_id')->textInput() ?>

    <?= $form->field($model, 'created_time')->textInput() ?>

    <?= $form->field($model, 'modified_user_id')->textInput() ?>

    <?= $form->field($model, 'modified_time')->textInput() ?>

    <?= $form->field($model, 'posted')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
