<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FstmtAcc */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="fstmt-acc-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'stmt_id')->textInput() ?>

    <?= $form->field($model, 'line_seq')->textInput() ?>

    <?= $form->field($model, 'account_from')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'account_to')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
