<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MedrecRequest */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="medrec-request-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'from_location_id')->textInput() ?>

    <?= $form->field($model, 'mr_request_date')->textInput() ?>

    <?= $form->field($model, 'folio_id')->textInput() ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'request_type')->textInput() ?>

    <?= $form->field($model, 'posted')->textInput() ?>

    <?= $form->field($model, 'mr_respond_date')->textInput() ?>

    <?= $form->field($model, 'created_user_id')->textInput() ?>

    <?= $form->field($model, 'created_time')->textInput() ?>

    <?= $form->field($model, 'modified_user_id')->textInput() ?>

    <?= $form->field($model, 'modified_time')->textInput() ?>

    <?= $form->field($model, 'status_patient')->textInput() ?>

    <?= $form->field($model, 'printed')->textInput() ?>

    <?= $form->field($model, 'bag')->textInput() ?>

    <?= $form->field($model, 'reg_id')->textInput() ?>

    <?= $form->field($model, 'return_date')->textInput() ?>

    <?= $form->field($model, 'return_user')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
