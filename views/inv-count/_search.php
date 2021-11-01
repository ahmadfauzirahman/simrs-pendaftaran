<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\InvCountSearch */
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

    <?= $form->field($model, 'count_id') ?>

    <?= $form->field($model, 'count_no') ?>

    <?= $form->field($model, 'count_date') ?>

    <?= $form->field($model, 'warehouse_id') ?>

    <?= $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'counted_by') ?>

    <?php // echo $form->field($model, 'posted') ?>

    <?php // echo $form->field($model, 'adjust_in_acc_id') ?>

    <?php // echo $form->field($model, 'adjust_out_acc_id') ?>

    <?php // echo $form->field($model, 'created_user_id') ?>

    <?php // echo $form->field($model, 'created_time') ?>

    <?php // echo $form->field($model, 'modified_user_id') ?>

    <?php // echo $form->field($model, 'modified_time') ?>

    <?php // echo $form->field($model, 'gl_period') ?>

    <?php // echo $form->field($model, 'gl_year') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    </div>
    <!--.col-md-12-->
</div>
