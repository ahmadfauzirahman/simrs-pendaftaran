<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RefGroupExt */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="ref-group-ext-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ref_group_id')->textInput() ?>

    <?= $form->field($model, 'ref_group_name')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
