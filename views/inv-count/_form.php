<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\InvCount */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="inv-count-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'count_id')->textInput() ?>

    <?= $form->field($model, 'count_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'count_date')->textInput() ?>

    <?= $form->field($model, 'warehouse_id')->textInput() ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'counted_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'posted')->textInput() ?>

    <?= $form->field($model, 'adjust_in_acc_id')->textInput() ?>

    <?= $form->field($model, 'adjust_out_acc_id')->textInput() ?>

    <?= $form->field($model, 'created_user_id')->textInput() ?>

    <?= $form->field($model, 'created_time')->textInput() ?>

    <?= $form->field($model, 'modified_user_id')->textInput() ?>

    <?= $form->field($model, 'modified_time')->textInput() ?>

    <?= $form->field($model, 'gl_period')->textInput() ?>

    <?= $form->field($model, 'gl_year')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
