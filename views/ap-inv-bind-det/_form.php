<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ApInvBindDet */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="ap-inv-bind-det-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'bind_id')->textInput() ?>

    <?= $form->field($model, 'seq')->textInput() ?>

    <?= $form->field($model, 'invoice_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>