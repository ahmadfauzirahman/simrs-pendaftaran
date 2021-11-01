<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\WarehouseItem */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="warehouse-item-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'warehouse_id')->textInput() ?>

    <?= $form->field($model, 'item_id')->textInput() ?>

    <?= $form->field($model, 'minimum_qty')->textInput() ?>

    <?= $form->field($model, 'safety_level')->textInput() ?>

    <?= $form->field($model, 'economic_order_qty')->textInput() ?>

    <?= $form->field($model, 'location')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'location_row')->textInput() ?>

    <?= $form->field($model, 'location_col')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
