<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\IdExt */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="id-ext-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'num_id')->textInput() ?>

    <?= $form->field($model, 'name_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'next_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
