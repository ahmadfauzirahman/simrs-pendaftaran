<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\NurseCareParams */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="nurse-care-params-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nurse_care_param_id')->textInput() ?>

    <?= $form->field($model, 'seq')->textInput() ?>

    <?= $form->field($model, 'dept_id')->textInput() ?>

    <?= $form->field($model, 'unit_id')->textInput() ?>

    <?= $form->field($model, 'sub_unit_id')->textInput() ?>

    <?= $form->field($model, 'params')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'header')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'header_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sub_header')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sub_header_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'detail')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'detail_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'reverse')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
