<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ExamItem */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="exam-item-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'exam_id')->textInput() ?>

    <?= $form->field($model, 'item_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
