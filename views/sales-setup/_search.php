<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SalesSetupSearch */
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

    <?= $form->field($model, 'shipment_warehouse_id') ?>

    <?= $form->field($model, 'shipment_carrier_id') ?>

    <?= $form->field($model, 'qty_ordered_restriction') ?>

    <?= $form->field($model, 'qty_shipped_restriction') ?>

    <?php // echo $form->field($model, 'default_show_order') ?>

    <?php // echo $form->field($model, 'default_show_shipment') ?>

    <?php // echo $form->field($model, 'sorder_rpt_cat_id') ?>

    <?php // echo $form->field($model, 'shipment_rpt_cat_id') ?>

    <?php // echo $form->field($model, 'correction_needs_supervisor') ?>

    <?php // echo $form->field($model, 'created_user_id') ?>

    <?php // echo $form->field($model, 'created_time') ?>

    <?php // echo $form->field($model, 'modified_user_id') ?>

    <?php // echo $form->field($model, 'modified_time') ?>

    <?php // echo $form->field($model, 'pos_usage') ?>

    <?php // echo $form->field($model, 'pos_usage_remark') ?>

    <?php // echo $form->field($model, 'dtd') ?>

    <?php // echo $form->field($model, 'non_dtd') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    </div>
    <!--.col-md-12-->
</div>
