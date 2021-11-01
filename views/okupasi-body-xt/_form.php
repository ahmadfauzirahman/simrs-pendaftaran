<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\OkupasiBodyXt */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="okupasi-body-xt-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'okup_id')->textInput() ?>

    <?= $form->field($model, 'seq')->textInput() ?>

    <?= $form->field($model, 'body_id')->textInput() ?>

    <?= $form->field($model, 'body_type')->textInput() ?>

    <?= $form->field($model, 'created_user_id')->textInput() ?>

    <?= $form->field($model, 'created_time')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
