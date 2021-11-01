<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\InvAdjAccount */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="inv-adj-account-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'account_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gl_account_id')->textInput() ?>

    <?= $form->field($model, 'location_id')->textInput() ?>

    <?= $form->field($model, 'created_user_id')->textInput() ?>

    <?= $form->field($model, 'created_time')->textInput() ?>

    <?= $form->field($model, 'modified_user_id')->textInput() ?>

    <?= $form->field($model, 'modified_time')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
