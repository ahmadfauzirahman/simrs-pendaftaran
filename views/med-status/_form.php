<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MedStatus */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="med-status-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'med_status_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status_type')->textInput() ?>

    <?= $form->field($model, 'patient_condition')->textInput() ?>

    <?= $form->field($model, 'eklaim_status')->textInput() ?>

    <?= $form->field($model, 'created_user_id')->textInput() ?>

    <?= $form->field($model, 'created_time')->textInput() ?>

    <?= $form->field($model, 'modified_user_id')->textInput() ?>

    <?= $form->field($model, 'modified_time')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
