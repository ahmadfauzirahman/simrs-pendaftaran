<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\NPrequestSearch */
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

    <?= $form->field($model, 'request_id') ?>

    <?= $form->field($model, 'request_no') ?>

    <?= $form->field($model, 'warehouse_id') ?>

    <?= $form->field($model, 'request_date') ?>

    <?= $form->field($model, 'requested_by') ?>

    <?php // echo $form->field($model, 'request_notes') ?>

    <?php // echo $form->field($model, 'request_status') ?>

    <?php // echo $form->field($model, 'requested_date') ?>

    <?php // echo $form->field($model, 'order_id') ?>

    <?php // echo $form->field($model, 'num_of_orders') ?>

    <?php // echo $form->field($model, 'notes') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    </div>
    <!--.col-md-12-->
</div>
