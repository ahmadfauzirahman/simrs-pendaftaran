<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Diet */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="diet-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'diet_group_id')->textInput() ?>

    <?= $form->field($model, 'diet_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'disabled')->textInput() ?>

    <?= $form->field($model, 'created_user_id')->textInput() ?>

    <?= $form->field($model, 'created_time')->textInput() ?>

    <?= $form->field($model, 'modified_user_id')->textInput() ?>

    <?= $form->field($model, 'modified_time')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>