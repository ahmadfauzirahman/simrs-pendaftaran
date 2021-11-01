<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SpesialisasiOpExt */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="spesialisasi-op-ext-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'spes_id')->textInput() ?>

    <?= $form->field($model, 'spes_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'disabled')->textInput() ?>

    <?= $form->field($model, 'created_user_id')->textInput() ?>

    <?= $form->field($model, 'created_time')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
