<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\InvCountDet */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="inv-count-det-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'count_id')->textInput() ?>

    <?= $form->field($model, 'seq')->textInput() ?>

    <?= $form->field($model, 'item_id')->textInput() ?>

    <?= $form->field($model, 'physical_qty')->textInput() ?>

    <?= $form->field($model, 'system_qty')->textInput() ?>

    <?= $form->field($model, 'uom')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'uom_conversion')->textInput() ?>

    <?= $form->field($model, 'location')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'location_row')->textInput() ?>

    <?= $form->field($model, 'location_col')->textInput() ?>

    <?= $form->field($model, 'remark')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
