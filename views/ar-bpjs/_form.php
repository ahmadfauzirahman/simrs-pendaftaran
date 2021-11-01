<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ArBpjs */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="ar-bpjs-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'bpjs_sep_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'reg_date')->textInput() ?>

    <?= $form->field($model, 'reg_end_date')->textInput() ?>

    <?= $form->field($model, 'medrec_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'patient_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'inacbg')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'total_tarif')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tarif_rs')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'reg_dept')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
