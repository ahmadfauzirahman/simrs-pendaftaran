<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DtdMapping */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="dtd-mapping-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'icd_id')->textInput() ?>

    <?= $form->field($model, 'icd_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DTD')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
