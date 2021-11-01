<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\InvHistory */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="inv-history-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'item_id')->textInput() ?>

    <?= $form->field($model, 'warehouse_id')->textInput() ?>

    <?= $form->field($model, 'trans_date')->textInput() ?>

    <?= $form->field($model, 'trans_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'trans_type')->textInput() ?>

    <?= $form->field($model, 'trans_id')->textInput() ?>

    <?= $form->field($model, 'quantity')->textInput() ?>

    <?= $form->field($model, 'original_qty')->textInput() ?>

    <?= $form->field($model, 'original_uom')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'uom_conversion')->textInput() ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'wgt_avg_cost')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
