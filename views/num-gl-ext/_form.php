<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\NumGlExt */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="num-gl-ext-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'numbering_id')->textInput() ?>

    <?= $form->field($model, 'numbering_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'next_number')->textInput() ?>

    <?= $form->field($model, 'code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'format')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
