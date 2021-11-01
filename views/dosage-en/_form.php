<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DosageEn */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="dosage-en-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'dosage')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dasage_english')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
