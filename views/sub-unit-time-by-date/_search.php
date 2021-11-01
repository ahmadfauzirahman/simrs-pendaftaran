<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SubUnitTimeByDateSearch */
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

    <?= $form->field($model, 'sub_unit_id') ?>

    <?= $form->field($model, 'seq') ?>

    <?= $form->field($model, 'at_date') ?>

    <?= $form->field($model, 'begin_time') ?>

    <?= $form->field($model, 'end_time') ?>

    <?php // echo $form->field($model, 'patient_limit') ?>

    <?php // echo $form->field($model, 'arm_patient_limit') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    </div>
    <!--.col-md-12-->
</div>
