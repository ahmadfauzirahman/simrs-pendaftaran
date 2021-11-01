<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\NInvHistorySearch */
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

    <?= $form->field($model, 'history_id') ?>

    <?= $form->field($model, 'item_id') ?>

    <?= $form->field($model, 'warehouse_id') ?>

    <?= $form->field($model, 'trans_date') ?>

    <?= $form->field($model, 'trans_no') ?>

    <?php // echo $form->field($model, 'trans_type') ?>

    <?php // echo $form->field($model, 'trans_id') ?>

    <?php // echo $form->field($model, 'quantity') ?>

    <?php // echo $form->field($model, 'original_qty') ?>

    <?php // echo $form->field($model, 'original_uom') ?>

    <?php // echo $form->field($model, 'uom_conversion') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'wg_avg_cost') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    </div>
    <!--.col-md-12-->
</div>
