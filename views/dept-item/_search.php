<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DeptItemSearch */
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

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'dept_id') ?>

    <?= $form->field($model, 'unit_id') ?>

    <?= $form->field($model, 'sub_unit_id') ?>

    <?= $form->field($model, 'item_id') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'price') ?>

    <?php // echo $form->field($model, 'discount') ?>

    <?php // echo $form->field($model, 'compulsory') ?>

    <?php // echo $form->field($model, 'compul_qty') ?>

    <?php // echo $form->field($model, 'compul_event') ?>

    <?php // echo $form->field($model, 'auto_charge') ?>

    <?php // echo $form->field($model, 'auto_charge_type') ?>

    <?php // echo $form->field($model, 'created_user_id') ?>

    <?php // echo $form->field($model, 'created_time') ?>

    <?php // echo $form->field($model, 'modified_user_id') ?>

    <?php // echo $form->field($model, 'modified_time') ?>

    <?php // echo $form->field($model, 'sales_disc_gl_acc_id') ?>

    <?php // echo $form->field($model, 'sales_ret_gl_acc_id') ?>

    <?php // echo $form->field($model, 'inventory_gl_acc_id') ?>

    <?php // echo $form->field($model, 'sales_gl_acc_id') ?>

    <?php // echo $form->field($model, 'cogs_gl_acc_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    </div>
    <!--.col-md-12-->
</div>
