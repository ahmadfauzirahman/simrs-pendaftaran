<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SubModuleSearch */
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

    <?= $form->field($model, 'sub_mod_id') ?>

    <?= $form->field($model, 'sub_mod_name') ?>

    <?= $form->field($model, 'interface_id') ?>

    <?= $form->field($model, 'image') ?>

    <?= $form->field($model, 'dept_id') ?>

    <?php // echo $form->field($model, 'unit_id') ?>

    <?php // echo $form->field($model, 'sub_unit_id') ?>

    <?php // echo $form->field($model, 'mod_id') ?>

    <?php // echo $form->field($model, 'barcode_enabled') ?>

    <?php // echo $form->field($model, 'payment_type') ?>

    <?php // echo $form->field($model, 'before_insert_url') ?>

    <?php // echo $form->field($model, 'after_insert_url') ?>

    <?php // echo $form->field($model, 'before_edit_url') ?>

    <?php // echo $form->field($model, 'after_edit_url') ?>

    <?php // echo $form->field($model, 'before_cancel_url') ?>

    <?php // echo $form->field($model, 'after_cancel_url') ?>

    <?php // echo $form->field($model, 'bi_x') ?>

    <?php // echo $form->field($model, 'bi_y') ?>

    <?php // echo $form->field($model, 'ai_x') ?>

    <?php // echo $form->field($model, 'ai_y') ?>

    <?php // echo $form->field($model, 'be_x') ?>

    <?php // echo $form->field($model, 'be_y') ?>

    <?php // echo $form->field($model, 'ae_x') ?>

    <?php // echo $form->field($model, 'ae_y') ?>

    <?php // echo $form->field($model, 'bc_x') ?>

    <?php // echo $form->field($model, 'bc_y') ?>

    <?php // echo $form->field($model, 'ac_x') ?>

    <?php // echo $form->field($model, 'ac_y') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    </div>
    <!--.col-md-12-->
</div>
