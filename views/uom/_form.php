<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Uom */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="uom-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'uom_id')->textInput() ?>

    <?= $form->field($model, 'uom_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'uom_eng')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'main_unit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_user_id')->textInput() ?>

    <?= $form->field($model, 'created_time')->textInput() ?>

    <?= $form->field($model, 'modified_user_id')->textInput() ?>

    <?= $form->field($model, 'modified_time')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
