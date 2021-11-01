<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Icd */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="icd-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'icd_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dtd_id')->textInput() ?>

    <?= $form->field($model, 'dtd')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'parent_icd_id')->textInput() ?>

    <?= $form->field($model, 'icd_type_id')->textInput() ?>

    <?= $form->field($model, 'created_user_id')->textInput() ?>

    <?= $form->field($model, 'created_time')->textInput() ?>

    <?= $form->field($model, 'modified_user_id')->textInput() ?>

    <?= $form->field($model, 'modified_time')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
