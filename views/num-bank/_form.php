<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\NumBank */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="num-bank-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'numbering_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'min_number')->textInput() ?>

    <?= $form->field($model, 'max_number')->textInput() ?>

    <?= $form->field($model, 'next_number')->textInput() ?>

    <?= $form->field($model, 'format')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'reset_option')->textInput() ?>

    <?= $form->field($model, 'enable_reset')->textInput() ?>

    <?= $form->field($model, 'num_year')->textInput() ?>

    <?= $form->field($model, 'num_month')->textInput() ?>

    <?= $form->field($model, 'num_date')->textInput() ?>

    <?= $form->field($model, 'created_user_id')->textInput() ?>

    <?= $form->field($model, 'created_time')->textInput() ?>

    <?= $form->field($model, 'modified_user_id')->textInput() ?>

    <?= $form->field($model, 'modified_time')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
