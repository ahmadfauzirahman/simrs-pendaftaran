<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DownPaymentSearch */
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

    <?= $form->field($model, 'id_booking') ?>

    <?= $form->field($model, 'patient_id') ?>

    <?= $form->field($model, 'status') ?>

    <?= $form->field($model, 'booking_date') ?>

    <?= $form->field($model, 'payment_id') ?>

    <?php // echo $form->field($model, 'pay_by_id') ?>

    <?php // echo $form->field($model, 'amount') ?>

    <?php // echo $form->field($model, 'billing_id') ?>

    <?php // echo $form->field($model, 'notes') ?>

    <?php // echo $form->field($model, 'registration_id') ?>

    <?php // echo $form->field($model, 'created_time') ?>

    <?php // echo $form->field($model, 'created_user_id') ?>

    <?php // echo $form->field($model, 'modified_time') ?>

    <?php // echo $form->field($model, 'modified_user_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    </div>
    <!--.col-md-12-->
</div>
