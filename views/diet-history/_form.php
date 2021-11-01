<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DietHistory */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="diet-history-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'history_id')->textInput() ?>

    <?= $form->field($model, 'folio_id')->textInput() ?>

    <?= $form->field($model, 'diet_id')->textInput() ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_by')->textInput() ?>

    <?= $form->field($model, 'created_time')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
