<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\GlJournalDet */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="gl-journal-det-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'journal_id')->textInput() ?>

    <?= $form->field($model, 'seq')->textInput() ?>

    <?= $form->field($model, 'account_id')->textInput() ?>

    <?= $form->field($model, 'location_id')->textInput() ?>

    <?= $form->field($model, 'currency_id')->textInput() ?>

    <?= $form->field($model, 'foreign_amount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'exchange_rate')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'department_id')->textInput() ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'amount')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
