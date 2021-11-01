<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RegTblView */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="reg-tbl-view-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tbl_view_id')->textInput() ?>

    <?= $form->field($model, 'tbl_view_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'view_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
