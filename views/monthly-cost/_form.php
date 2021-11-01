<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MonthlyCost */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="monthly-cost-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'inv_date')->textInput() ?>

    <?= $form->field($model, 'item_id')->textInput() ?>

    <?= $form->field($model, 'wgt_avg_cost')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
