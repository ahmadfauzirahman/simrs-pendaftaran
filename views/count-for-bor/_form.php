<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CountForBor */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="count-for-bor-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'progress_date')->textInput() ?>

    <?= $form->field($model, 'total_of_patient')->textInput() ?>

    <?= $form->field($model, 'total_of_bed')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
