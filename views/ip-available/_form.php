<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\IpAvailable */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="ip-available-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'act_date')->textInput() ?>

    <?= $form->field($model, 'unit_id')->textInput() ?>

    <?= $form->field($model, 'unit_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bed_available')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
