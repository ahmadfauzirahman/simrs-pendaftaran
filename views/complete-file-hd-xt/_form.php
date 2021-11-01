<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CompleteFileHdXt */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="complete-file-hd-xt-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'reg_id')->textInput() ?>

    <?= $form->field($model, 'staff_id')->textInput() ?>

    <?= $form->field($model, 'date_receive_file')->textInput() ?>

    <?= $form->field($model, 'date_start_hd')->textInput() ?>

    <?= $form->field($model, 'h_1')->textInput() ?>

    <?= $form->field($model, 'h_2')->textInput() ?>

    <?= $form->field($model, 'h_3')->textInput() ?>

    <?= $form->field($model, 'h_4')->textInput() ?>

    <?= $form->field($model, 'h_5')->textInput() ?>

    <?= $form->field($model, 'h_6')->textInput() ?>

    <?= $form->field($model, 'h_7')->textInput() ?>

    <?= $form->field($model, 'h_8')->textInput() ?>

    <?= $form->field($model, 'h_9')->textInput() ?>

    <?= $form->field($model, 'h_10')->textInput() ?>

    <?= $form->field($model, 'h_11')->textInput() ?>

    <?= $form->field($model, 'h_12')->textInput() ?>

    <?= $form->field($model, 'h_cp')->textInput() ?>

    <?= $form->field($model, 'h_date_cp')->textInput() ?>

    <?= $form->field($model, 'created_user_id')->textInput() ?>

    <?= $form->field($model, 'created_time')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
