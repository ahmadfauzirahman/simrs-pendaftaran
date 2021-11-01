<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ItemTypeSearch */
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

    <?= $form->field($model, 'item_type_id') ?>

    <?= $form->field($model, 'type_name') ?>

    <?= $form->field($model, 'inventory') ?>

    <?= $form->field($model, 'costing_method') ?>

    <?= $form->field($model, 'created_user_id') ?>

    <?php // echo $form->field($model, 'created_time') ?>

    <?php // echo $form->field($model, 'modified_user_id') ?>

    <?php // echo $form->field($model, 'modified_time') ?>

    <?php // echo $form->field($model, 'sales_gl_acc_id') ?>

    <?php // echo $form->field($model, 'sales_disc_gl_acc_id') ?>

    <?php // echo $form->field($model, 'inventory_gl_acc_id') ?>

    <?php // echo $form->field($model, 'cogs_gl_acc_id') ?>

    <?php // echo $form->field($model, 'cat') ?>

    <?php // echo $form->field($model, 'sales_ret_gl_acc_id') ?>

    <?php // echo $form->field($model, 'costing_journal') ?>

    <?php // echo $form->field($model, 'item_category') ?>

    <?php // echo $form->field($model, 'item_category_en') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    </div>
    <!--.col-md-12-->
</div>
