<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\OkupasiPmXt */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="okupasi-pm-xt-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'pm_id')->textInput() ?>

    <?= $form->field($model, 'pm_name')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
