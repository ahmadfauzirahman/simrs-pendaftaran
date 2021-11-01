<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\GlJournal */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="gl-journal-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'journal_id')->textInput() ?>

    <?= $form->field($model, 'journal_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'journal_date')->textInput() ?>

    <?= $form->field($model, 'journal_type_id')->textInput() ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'amount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'posted')->textInput() ?>

    <?= $form->field($model, 'gl_period')->textInput() ?>

    <?= $form->field($model, 'gl_year')->textInput() ?>

    <?= $form->field($model, 'source')->textInput() ?>

    <?= $form->field($model, 'source_trans_id')->textInput() ?>

    <?= $form->field($model, 'reverse')->textInput() ?>

    <?= $form->field($model, 'reverse_date')->textInput() ?>

    <?= $form->field($model, 'by_system')->textInput() ?>

    <?= $form->field($model, 'created_user_id')->textInput() ?>

    <?= $form->field($model, 'created_time')->textInput() ?>

    <?= $form->field($model, 'modified_user_id')->textInput() ?>

    <?= $form->field($model, 'modified_time')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
