<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\GlJournalExt */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="gl-journal-ext-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'j_id')->textInput() ?>

    <?= $form->field($model, 'j_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'j_date')->textInput() ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'amount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'posted')->textInput() ?>

    <?= $form->field($model, 'gl_periode')->textInput() ?>

    <?= $form->field($model, 'gl_year')->textInput() ?>

    <?= $form->field($model, 'gl_balance')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_user_id')->textInput() ?>

    <?= $form->field($model, 'created_time')->textInput() ?>

    <?= $form->field($model, 'completed')->textInput() ?>

    <?= $form->field($model, 'pc')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
