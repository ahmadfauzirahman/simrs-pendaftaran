<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\NurseCareValues */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="nurse-care-values-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nurse_care_param_id')->textInput() ?>

    <?= $form->field($model, 'seq')->textInput() ?>

    <?= $form->field($model, 'value_seq')->textInput() ?>

    <?= $form->field($model, 'value')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'value_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'show_detail')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
