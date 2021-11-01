<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BpjsAplicaresCos */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="bpjs-aplicares-cos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kodekelas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'namakelas')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
