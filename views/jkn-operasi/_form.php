<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\JknOperasi */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="jkn-operasi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nomorkartu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kodebooking')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggaloperasi')->textInput() ?>

    <?= $form->field($model, 'jenistindakan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kodepoli')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'namapoli')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'terlaksana')->textInput() ?>

    <?= $form->field($model, 'patient_id')->textInput() ?>

    <?= $form->field($model, 'created_user_id')->textInput() ?>

    <?= $form->field($model, 'created_time')->textInput() ?>

    <?= $form->field($model, 'modified_user_id')->textInput() ?>

    <?= $form->field($model, 'modified_time')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
