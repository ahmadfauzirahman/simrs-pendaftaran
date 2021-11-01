<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SubModule */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="sub-module-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'sub_mod_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'interface_id')->textInput() ?>

    <?= $form->field($model, 'image')->textInput() ?>

    <?= $form->field($model, 'dept_id')->textInput() ?>

    <?= $form->field($model, 'unit_id')->textInput() ?>

    <?= $form->field($model, 'sub_unit_id')->textInput() ?>

    <?= $form->field($model, 'mod_id')->textInput() ?>

    <?= $form->field($model, 'barcode_enabled')->textInput() ?>

    <?= $form->field($model, 'payment_type')->textInput() ?>

    <?= $form->field($model, 'before_insert_url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'after_insert_url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'before_edit_url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'after_edit_url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'before_cancel_url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'after_cancel_url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bi_x')->textInput() ?>

    <?= $form->field($model, 'bi_y')->textInput() ?>

    <?= $form->field($model, 'ai_x')->textInput() ?>

    <?= $form->field($model, 'ai_y')->textInput() ?>

    <?= $form->field($model, 'be_x')->textInput() ?>

    <?= $form->field($model, 'be_y')->textInput() ?>

    <?= $form->field($model, 'ae_x')->textInput() ?>

    <?= $form->field($model, 'ae_y')->textInput() ?>

    <?= $form->field($model, 'bc_x')->textInput() ?>

    <?= $form->field($model, 'bc_y')->textInput() ?>

    <?= $form->field($model, 'ac_x')->textInput() ?>

    <?= $form->field($model, 'ac_y')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
