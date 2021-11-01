<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BedAvailableBpjs */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="bed-available-bpjs-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kodekelas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'koderuang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'namakelas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'namaruang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kapasitas')->textInput() ?>

    <?= $form->field($model, 'tersedia')->textInput() ?>

    <?= $form->field($model, 'tersediapria')->textInput() ?>

    <?= $form->field($model, 'tersediawanita')->textInput() ?>

    <?= $form->field($model, 'tersediapriawanita')->textInput() ?>

    <?= $form->field($model, 'synchronize')->textInput() ?>

    <?= $form->field($model, 'created_user_id')->textInput() ?>

    <?= $form->field($model, 'created_time')->textInput() ?>

    <?= $form->field($model, 'modified_user_id')->textInput() ?>

    <?= $form->field($model, 'modified_time')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
