<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ArBpjsSearch */
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

    <?= $form->field($model, 'bpjs_sep_no') ?>

    <?= $form->field($model, 'reg_date') ?>

    <?= $form->field($model, 'reg_end_date') ?>

    <?= $form->field($model, 'medrec_no') ?>

    <?= $form->field($model, 'patient_name') ?>

    <?php // echo $form->field($model, 'inacbg') ?>

    <?php // echo $form->field($model, 'total_tarif') ?>

    <?php // echo $form->field($model, 'tarif_rs') ?>

    <?php // echo $form->field($model, 'reg_dept') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    </div>
    <!--.col-md-12-->
</div>
