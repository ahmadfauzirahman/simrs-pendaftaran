<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Dtd */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="dtd-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_urut')->textInput() ?>

    <?= $form->field($model, 'dtd_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'icd_descr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dtd_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_user_id')->textInput() ?>

    <?= $form->field($model, 'created_time')->textInput() ?>

    <?= $form->field($model, 'modified_user_id')->textInput() ?>

    <?= $form->field($model, 'modified_time')->textInput() ?>

    <?= $form->field($model, 'dtd_type')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
