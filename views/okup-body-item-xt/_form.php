<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\OkupBodyItemXt */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="okup-body-item-xt-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'body_id')->textInput() ?>

    <?= $form->field($model, 'body_name')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
