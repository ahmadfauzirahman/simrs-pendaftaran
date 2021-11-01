<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FolioAnam */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="folio-anam-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'folio_id')->textInput() ?>

    <?= $form->field($model, 'seq')->textInput() ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'file_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'attachment')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
