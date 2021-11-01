<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\GlJtemplate */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="gl-jtemplate-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'jtemplate_id')->textInput() ?>

    <?= $form->field($model, 'template_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'journal_type_id')->textInput() ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'auto_recurring')->textInput() ?>

    <?= $form->field($model, 'created_user_id')->textInput() ?>

    <?= $form->field($model, 'created_time')->textInput() ?>

    <?= $form->field($model, 'modified_user_id')->textInput() ?>

    <?= $form->field($model, 'modified_time')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
