<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BpjsReferToSearch */
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

    <?= $form->field($model, 'folio_id') ?>

    <?= $form->field($model, 'patient_id') ?>

    <?= $form->field($model, 'refer_type') ?>

    <?= $form->field($model, 'refer_service') ?>

    <?= $form->field($model, 'refer_notes') ?>

    <?php // echo $form->field($model, 'refer_from_code') ?>

    <?php // echo $form->field($model, 'refer_from_name') ?>

    <?php // echo $form->field($model, 'refer_diag_code') ?>

    <?php // echo $form->field($model, 'refer_diag_name') ?>

    <?php // echo $form->field($model, 'refer_no') ?>

    <?php // echo $form->field($model, 'refer_date') ?>

    <?php // echo $form->field($model, 'refer_patient_insurance') ?>

    <?php // echo $form->field($model, 'refer_patient_cos') ?>

    <?php // echo $form->field($model, 'refer_patient_jenis_peserta') ?>

    <?php // echo $form->field($model, 'refer_patient_sex') ?>

    <?php // echo $form->field($model, 'refer_patient_name') ?>

    <?php // echo $form->field($model, 'refer_patient_card_no') ?>

    <?php // echo $form->field($model, 'refer_patient_medrec') ?>

    <?php // echo $form->field($model, 'refer_patient_birth_date') ?>

    <?php // echo $form->field($model, 'refer_to_code') ?>

    <?php // echo $form->field($model, 'refer_to_name') ?>

    <?php // echo $form->field($model, 'refer_to_clinic') ?>

    <?php // echo $form->field($model, 'refer_to_clinic_name') ?>

    <?php // echo $form->field($model, 'created_by') ?>

    <?php // echo $form->field($model, 'created_time') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    </div>
    <!--.col-md-12-->
</div>
