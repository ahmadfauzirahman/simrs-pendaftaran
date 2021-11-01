<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Inacbgs */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="inacbgs-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'inacbgs_id')->textInput() ?>

    <?= $form->field($model, 'cos_id')->textInput() ?>

    <?= $form->field($model, 'inacbgs_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'inacbgs_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'value')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
