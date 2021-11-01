<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\InvCost */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="inv-cost-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cos_id')->textInput() ?>

    <?= $form->field($model, 'item_id')->textInput() ?>

    <?= $form->field($model, 'quantity')->textInput() ?>

    <?= $form->field($model, 'unit_cost')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'used_qty')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
