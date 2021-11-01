<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\QTrans */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="qtrans-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'q_trans_date')->textInput() ?>

    <?= $form->field($model, 'folio_id')->textInput() ?>

    <?= $form->field($model, 'q_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'q_server_id')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
