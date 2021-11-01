<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ObjectAct */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="object-act-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'act_time')->textInput() ?>

    <?= $form->field($model, 'station_id')->textInput() ?>

    <?= $form->field($model, 'object_id')->textInput() ?>

    <?= $form->field($model, 'act_function')->textInput() ?>

    <?= $form->field($model, 'act_data')->textInput() ?>

    <?= $form->field($model, 'station_ip_addr')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
