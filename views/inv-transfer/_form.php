<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\InvTransfer */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="inv-transfer-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'transfer_id')->textInput() ?>

    <?= $form->field($model, 'transfer_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'transfer_request_date')->textInput() ?>

    <?= $form->field($model, 'transfer_date')->textInput() ?>

    <?= $form->field($model, 'source_wh_id')->textInput() ?>

    <?= $form->field($model, 'destination_wh_id')->textInput() ?>

    <?= $form->field($model, 'approved')->textInput() ?>

    <?= $form->field($model, 'posted')->textInput() ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_user_id')->textInput() ?>

    <?= $form->field($model, 'created_time')->textInput() ?>

    <?= $form->field($model, 'modified_user_id')->textInput() ?>

    <?= $form->field($model, 'modified_time')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
