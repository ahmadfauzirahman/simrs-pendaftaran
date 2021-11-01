<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\QServerDet */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="qserver-det-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'q_server_id')->textInput() ?>

    <?= $form->field($model, 'seq')->textInput() ?>

    <?= $form->field($model, 'sub_unit_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
