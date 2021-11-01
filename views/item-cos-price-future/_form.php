<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ItemCosPriceFuture */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="item-cos-price-future-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'update_method')->textInput() ?>

    <?= $form->field($model, 'eff_date')->textInput() ?>

    <?= $form->field($model, 'item_id')->textInput() ?>

    <?= $form->field($model, 'cos_id')->textInput() ?>

    <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'discount')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
