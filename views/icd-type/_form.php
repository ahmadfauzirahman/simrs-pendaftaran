<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\IcdType */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="icd-type-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'icd_type_id')->textInput() ?>

    <?= $form->field($model, 'icd_type_name')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
