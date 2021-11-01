<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ScrtCustomForm */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="scrt-custom-form-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'policy_id')->textInput() ?>

    <?= $form->field($model, 'custom_form_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
