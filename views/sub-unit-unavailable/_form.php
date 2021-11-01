<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SubUnitUnavailable */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="sub-unit-unavailable-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'sub_unit_id')->textInput() ?>

    <?= $form->field($model, 'seq')->textInput() ?>

    <?= $form->field($model, 'unavailable_from')->textInput() ?>

    <?= $form->field($model, 'unavailable_to')->textInput() ?>

    <?= $form->field($model, 'unavailable_reason')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
