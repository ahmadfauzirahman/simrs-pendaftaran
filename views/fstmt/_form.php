<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Fstmt */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="fstmt-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'stmt_id')->textInput() ?>

    <?= $form->field($model, 'column_format')->textInput() ?>

    <?= $form->field($model, 'report_id')->textInput() ?>

    <?= $form->field($model, 'use_location')->textInput() ?>

    <?= $form->field($model, 'get_bal')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
