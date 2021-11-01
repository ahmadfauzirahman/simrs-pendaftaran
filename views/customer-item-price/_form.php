<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CustomerItemPrice */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="customer-item-price-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'customer_id')->textInput() ?>

    <?= $form->field($model, 'seq')->textInput() ?>

    <?= $form->field($model, 'item_id')->textInput() ?>

    <?= $form->field($model, 'unit_price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'unit_discount')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
