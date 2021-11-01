<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FstmtLine */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="fstmt-line-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'stmt_id')->textInput() ?>

    <?= $form->field($model, 'line_seq')->textInput() ?>

    <?= $form->field($model, 'line_no')->textInput() ?>

    <?= $form->field($model, 'line_description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'line_type')->textInput() ?>

    <?= $form->field($model, 'parent_line_seq')->textInput() ?>

    <?= $form->field($model, 'reverse')->textInput() ?>

    <?= $form->field($model, 'get_bal')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
