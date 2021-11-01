<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\GlAccount */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="gl-account-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'account_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'account_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'account_type')->textInput() ?>

    <?= $form->field($model, 'notes')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'disabled')->textInput() ?>

    <?= $form->field($model, 'created_user_id')->textInput() ?>

    <?= $form->field($model, 'created_time')->textInput() ?>

    <?= $form->field($model, 'modified_user_id')->textInput() ?>

    <?= $form->field($model, 'modified_time')->textInput() ?>

    <?= $form->field($model, 'no_urut')->textInput() ?>

    <?= $form->field($model, 'pc')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
