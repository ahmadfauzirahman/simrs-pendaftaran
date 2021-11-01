<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ScrtData */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="scrt-data-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'data_id')->textInput() ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'table_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'key_field')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'displayed_field')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'order_field')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'module')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
