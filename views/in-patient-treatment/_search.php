<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\InPatientTreatmentSearch */
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

    <?= $form->field($model, 'registration_id') ?>

    <?= $form->field($model, 'patient_id') ?>

    <?= $form->field($model, 'folio_id') ?>

    <?= $form->field($model, 'dept_id') ?>

    <?= $form->field($model, 'unit_id') ?>

    <?php // echo $form->field($model, 'sub_unit_id') ?>

    <?php // echo $form->field($model, 'primary_dokter_id') ?>

    <?php // echo $form->field($model, 'service_date') ?>

    <?php // echo $form->field($model, 'trans_date') ?>

    <?php // echo $form->field($model, 'created_time') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    </div>
    <!--.col-md-12-->
</div>
