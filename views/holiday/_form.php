<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Holiday */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="holiday-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'holiday_start_date')->textInput() ?>

    <?= $form->field($model, 'holiday_end_date')->textInput() ?>

    <?= $form->field($model, 'holiday_desc')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
