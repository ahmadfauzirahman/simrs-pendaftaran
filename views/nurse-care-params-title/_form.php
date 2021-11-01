<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\NurseCareParamsTitle */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="nurse-care-params-title-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nurse_care_param_id')->textInput() ?>

    <?= $form->field($model, 'report_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'report_title_en')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>