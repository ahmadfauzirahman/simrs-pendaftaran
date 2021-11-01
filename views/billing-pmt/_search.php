<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BillingPmtSearch */
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

    <?= $form->field($model, 'bill_pmt_id') ?>

    <?= $form->field($model, 'bill_pmt_no') ?>

    <?= $form->field($model, 'bill_pmt_date') ?>

    <?= $form->field($model, 'payment_type') ?>

    <?= $form->field($model, 'amount') ?>

    <?php // echo $form->field($model, 'registration_id') ?>

    <?php // echo $form->field($model, 'pay_by') ?>

    <?php // echo $form->field($model, 'notes') ?>

    <?php // echo $form->field($model, 'print_no') ?>

    <?php // echo $form->field($model, 'all_print_no') ?>

    <?php // echo $form->field($model, 'created_user_id') ?>

    <?php // echo $form->field($model, 'created_time') ?>

    <?php // echo $form->field($model, 'modified_user_id') ?>

    <?php // echo $form->field($model, 'modified_time') ?>

    <?php // echo $form->field($model, 'bill_no') ?>

    <?php // echo $form->field($model, 'bill_status') ?>

    <?php // echo $form->field($model, 'id_bill') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    </div>
    <!--.col-md-12-->
</div>
