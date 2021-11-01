<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Ambulance */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="ambulance-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ambulance_id')->textInput() ?>

    <?= $form->field($model, 'ambulance_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'plat_nomor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address_line')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'city')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_user_id')->textInput() ?>

    <?= $form->field($model, 'created_time')->textInput() ?>

    <?= $form->field($model, 'modified_user_id')->textInput() ?>

    <?= $form->field($model, 'modified_user_time')->textInput() ?>

    <?= $form->field($model, 'disabled')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
