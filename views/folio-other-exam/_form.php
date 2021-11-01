<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FolioOtherExam */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="folio-other-exam-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'folio_id')->textInput() ?>

    <?= $form->field($model, 'seq')->textInput() ?>

    <?= $form->field($model, 'exam_id')->textInput() ?>

    <?= $form->field($model, 'exam_value')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'exam_result')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'posted')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
