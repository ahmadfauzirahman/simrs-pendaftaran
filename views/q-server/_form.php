<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\QServer */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="qserver-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'q_server_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'q_server_display_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'q_server_display_short')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'q_server_no')->textInput() ?>

    <?= $form->field($model, 'q_server_color')->textInput() ?>

    <?= $form->field($model, 'created_user_id')->textInput() ?>

    <?= $form->field($model, 'created_time')->textInput() ?>

    <?= $form->field($model, 'modified_user_id')->textInput() ?>

    <?= $form->field($model, 'modified_time')->textInput() ?>

    <?= $form->field($model, 'user_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'last_update')->textInput() ?>

    <?= $form->field($model, 'ip_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'computer_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'registration_id')->textInput() ?>

    <?= $form->field($model, 'patient_id')->textInput() ?>

    <?= $form->field($model, 'queue_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'disabled')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
