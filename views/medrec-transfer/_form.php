<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MedrecTransfer */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="medrec-transfer-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'mr_transfer_id')->textInput() ?>

    <?= $form->field($model, 'mr_transfer_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mr_transfer_date')->textInput() ?>

    <?= $form->field($model, 'from_location_id')->textInput() ?>

    <?= $form->field($model, 'to_location_id')->textInput() ?>

    <?= $form->field($model, 'sent_user_id')->textInput() ?>

    <?= $form->field($model, 'received_user_id')->textInput() ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'posted')->textInput() ?>

    <?= $form->field($model, 'created_user_id')->textInput() ?>

    <?= $form->field($model, 'created_time')->textInput() ?>

    <?= $form->field($model, 'modified_user_id')->textInput() ?>

    <?= $form->field($model, 'modified_time')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
