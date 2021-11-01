<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\StaffFeeCriteriaSearch */
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

    <?= $form->field($model, 'staff_id') ?>

    <?= $form->field($model, 'item_id') ?>

    <?= $form->field($model, 'item_type_ide') ?>

    <?= $form->field($model, 'item_group_id') ?>

    <?= $form->field($model, 'dept_id') ?>

    <?php // echo $form->field($model, 'unit_id') ?>

    <?php // echo $form->field($model, 'sub_unit_id') ?>

    <?php // echo $form->field($model, 'service_cos_id') ?>

    <?php // echo $form->field($model, 'pay_by_id') ?>

    <?php // echo $form->field($model, 'changeto_account_id') ?>

    <?php // echo $form->field($model, 'share_dr_fixed') ?>

    <?php // echo $form->field($model, 'share_dr_pct') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    </div>
    <!--.col-md-12-->
</div>
