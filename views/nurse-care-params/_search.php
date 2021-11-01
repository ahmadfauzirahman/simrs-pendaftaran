<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\NurseCareParamsSearch */
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

    <?= $form->field($model, 'nurse_care_param_id') ?>

    <?= $form->field($model, 'seq') ?>

    <?= $form->field($model, 'dept_id') ?>

    <?= $form->field($model, 'unit_id') ?>

    <?= $form->field($model, 'sub_unit_id') ?>

    <?php // echo $form->field($model, 'params') ?>

    <?php // echo $form->field($model, 'header') ?>

    <?php // echo $form->field($model, 'header_en') ?>

    <?php // echo $form->field($model, 'sub_header') ?>

    <?php // echo $form->field($model, 'sub_header_en') ?>

    <?php // echo $form->field($model, 'detail') ?>

    <?php // echo $form->field($model, 'detail_en') ?>

    <?php // echo $form->field($model, 'reverse') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    </div>
    <!--.col-md-12-->
</div>
