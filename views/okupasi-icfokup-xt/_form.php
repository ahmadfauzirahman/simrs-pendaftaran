<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\OkupasiIcfokupXt */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="okupasi-icfokup-xt-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'okup_id')->textInput() ?>

    <?= $form->field($model, 'seq')->textInput() ?>

    <?= $form->field($model, 'icf_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
