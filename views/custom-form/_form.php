<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CustomForm */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="custom-form-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'custom_form_id')->textInput() ?>

    <?= $form->field($model, 'custom_form_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'custom_form_description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'custom_form_url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
