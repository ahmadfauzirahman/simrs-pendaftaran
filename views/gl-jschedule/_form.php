<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\GlJschedule */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="gl-jschedule-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'schedule_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'journal_type_id')->textInput() ?>

    <?= $form->field($model, 'from_date')->textInput() ?>

    <?= $form->field($model, 'to_date')->textInput() ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'posted')->textInput() ?>

    <?= $form->field($model, 'auto_post')->textInput() ?>

    <?= $form->field($model, 'created_user_id')->textInput() ?>

    <?= $form->field($model, 'created_time')->textInput() ?>

    <?= $form->field($model, 'modified_user_id')->textInput() ?>

    <?= $form->field($model, 'modified_time')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
