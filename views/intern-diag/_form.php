<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\InternDiag */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="intern-diag-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'intern_diag_id')->textInput() ?>

    <?= $form->field($model, 'icd_id')->textInput() ?>

    <?= $form->field($model, 'intern_diag_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'intern_diag_descr')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
