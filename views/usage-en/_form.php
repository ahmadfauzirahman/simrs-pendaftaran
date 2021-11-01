<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UsageEn */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="usage-en-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'usage')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'usage_english')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
