<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\InformasiPhoneXt */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="informasi-phone-xt-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'informasi_id')->textInput() ?>

    <?= $form->field($model, 'seq')->textInput() ?>

    <?= $form->field($model, 'reg_id')->textInput() ?>

    <?= $form->field($model, 'catatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_user_id')->textInput() ?>

    <?= $form->field($model, 'created_time')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
