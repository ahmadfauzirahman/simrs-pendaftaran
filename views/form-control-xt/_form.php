<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FormControlXt */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="form-control-xt-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'control_id')->textInput() ?>

    <?= $form->field($model, 'control_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'form_date')->textInput() ?>

    <?= $form->field($model, 'control_date')->textInput() ?>

    <?= $form->field($model, 'folio_id')->textInput() ?>

    <?= $form->field($model, 'diagnosa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'therapi')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'alasan')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'unit_id')->textInput() ?>

    <?= $form->field($model, 'time_dokter')->textInput() ?>

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
