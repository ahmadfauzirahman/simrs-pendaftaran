<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BpjsReferralSearch */
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

    <?= $form->field($model, 'patient_id') ?>

    <?= $form->field($model, 'bpjs_refer_no') ?>

    <?= $form->field($model, 'bpjs_refer_date') ?>

    <?= $form->field($model, 'bpjs_refer_from') ?>

    <?= $form->field($model, 'bpjs_refer_from_name') ?>

    <?php // echo $form->field($model, 'bpjs_refer_to') ?>

    <?php // echo $form->field($model, 'bpjs_refer_to_name') ?>

    <?php // echo $form->field($model, 'bpjs_service') ?>

    <?php // echo $form->field($model, 'bpjs_service_to') ?>

    <?php // echo $form->field($model, 'bpjs_service_cos') ?>

    <?php // echo $form->field($model, 'bpjs_from_diagnose_code') ?>

    <?php // echo $form->field($model, 'bpjs_from_diagnose') ?>

    <?php // echo $form->field($model, 'bpjs_from_cause') ?>

    <?php // echo $form->field($model, 'bpjs_from_location') ?>

    <?php // echo $form->field($model, 'bpjs_notes') ?>

    <?php // echo $form->field($model, 'verified_by') ?>

    <?php // echo $form->field($model, 'verified_time') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'rujukan_intern') ?>

    <?php // echo $form->field($model, 'no_skdp') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    </div>
    <!--.col-md-12-->
</div>
