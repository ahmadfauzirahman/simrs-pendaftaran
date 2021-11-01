<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RlDtdExternal */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="rl-dtd-external-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_urut')->textInput() ?>

    <?= $form->field($model, 'no_dtd')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_rinci')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_dtd')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
