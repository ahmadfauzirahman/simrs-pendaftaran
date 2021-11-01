<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\GlJournalExtDet */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="gl-journal-ext-det-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'j_id')->textInput() ?>

    <?= $form->field($model, 'seq')->textInput() ?>

    <?= $form->field($model, 'account_id')->textInput() ?>

    <?= $form->field($model, 'debet')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kredit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
