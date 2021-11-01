<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\NPurchaseSetupSearch */
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

    <?= $form->field($model, 'company_id') ?>

    <?= $form->field($model, 'qty_received_restriction') ?>

    <?= $form->field($model, 'qty_ordered_auto_calc') ?>

    <?= $form->field($model, 'default_show_order') ?>

    <?= $form->field($model, 'default_show_receipt') ?>

    <?php // echo $form->field($model, 'prequest_rpt_cat_id') ?>

    <?php // echo $form->field($model, 'porder_rpt_cat_id') ?>

    <?php // echo $form->field($model, 'preceipt_rpt_cat_id') ?>

    <?php // echo $form->field($model, 'created_user_id') ?>

    <?php // echo $form->field($model, 'created_time') ?>

    <?php // echo $form->field($model, 'modified_user_id') ?>

    <?php // echo $form->field($model, 'modified_time') ?>

    <?php // echo $form->field($model, 'preceipt_default_qty') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    </div>
    <!--.col-md-12-->
</div>
