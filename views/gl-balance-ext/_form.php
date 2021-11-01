<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\GlbalanceExt */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="glbalance-ext-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'gl_id')->textInput() ?>

    <?= $form->field($model, 'account_id')->textInput() ?>

    <?= $form->field($model, 'gl_year')->textInput() ?>

    <?= $form->field($model, 'opening_balance')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'balance')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_user_id')->textInput() ?>

    <?= $form->field($model, 'created_time')->textInput() ?>

    <?= $form->field($model, 'modified_user_id')->textInput() ?>

    <?= $form->field($model, 'modified_time')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
