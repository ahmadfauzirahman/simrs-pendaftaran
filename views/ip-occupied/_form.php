<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\IpOccupied */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="ip-occupied-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'act_date')->textInput() ?>

    <?= $form->field($model, 'unit_id')->textInput() ?>

    <?= $form->field($model, 'cos_id')->textInput() ?>

    <?= $form->field($model, 'unit_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cos_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bed_occupied')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
