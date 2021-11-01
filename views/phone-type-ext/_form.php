<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PhoneTypeExt */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="phone-type-ext-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'phone_type_id')->textInput() ?>

    <?= $form->field($model, 'type_name')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
