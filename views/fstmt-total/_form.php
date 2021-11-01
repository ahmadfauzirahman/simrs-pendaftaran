<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FstmtTotal */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="fstmt-total-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'stmt_id')->textInput() ?>

    <?= $form->field($model, 'line_seq')->textInput() ?>

    <?= $form->field($model, 'total_line_seq')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
