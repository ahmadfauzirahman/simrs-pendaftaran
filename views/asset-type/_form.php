<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AssetType */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="asset-type-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'type_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'asset_char')->textInput() ?>

    <?= $form->field($model, 'asset_gl_acc_id')->textInput() ?>

    <?= $form->field($model, 'dep_gl_acc_id')->textInput() ?>

    <?= $form->field($model, 'accdep_gl_acc_id')->textInput() ?>

    <?= $form->field($model, 'disposal_gl_acc_id')->textInput() ?>

    <?= $form->field($model, 'sales_gl_acc_id')->textInput() ?>

    <?= $form->field($model, 'dep_method')->textInput() ?>

    <?= $form->field($model, 'lite_time')->textInput() ?>

    <?= $form->field($model, 'created_user_id')->textInput() ?>

    <?= $form->field($model, 'created_time')->textInput() ?>

    <?= $form->field($model, 'modified_user_id')->textInput() ?>

    <?= $form->field($model, 'modified_time')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
