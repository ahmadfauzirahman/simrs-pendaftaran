<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CurrencySearch */
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

    <?= $form->field($model, 'currency_id') ?>

    <?= $form->field($model, 'currency_name') ?>

    <?= $form->field($model, 'exchange_rate') ?>

    <?= $form->field($model, 'taxation_rate') ?>

    <?= $form->field($model, 'symbol') ?>

    <?php // echo $form->field($model, 'created_user_id') ?>

    <?php // echo $form->field($model, 'created_time') ?>

    <?php // echo $form->field($model, 'modified_user_id') ?>

    <?php // echo $form->field($model, 'modified_time') ?>

    <?php // echo $form->field($model, 'exchg_gl_acc_id') ?>

    <?php // echo $form->field($model, 'ap_gl_acc_id') ?>

    <?php // echo $form->field($model, 'ap_disc_gl_acc_id') ?>

    <?php // echo $form->field($model, 'ap_dp_gl_acc_id') ?>

    <?php // echo $form->field($model, 'ap_pdc_gl_acc_id') ?>

    <?php // echo $form->field($model, 'ar_gl_acc_id') ?>

    <?php // echo $form->field($model, 'ar_disc_gl_acc_id') ?>

    <?php // echo $form->field($model, 'ar_dp_gl_acc_id') ?>

    <?php // echo $form->field($model, 'ar_pdc_gl_acc_id') ?>

    <?php // echo $form->field($model, 'pl_gl_acc_id') ?>

    <?php // echo $form->field($model, 'rounding_gl_acc_id') ?>

    <?php // echo $form->field($model, 'writeoff_gl_acc_id') ?>

    <?php // echo $form->field($model, 'rounding_type') ?>

    <?php // echo $form->field($model, 'rounding_value') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    </div>
    <!--.col-md-12-->
</div>
