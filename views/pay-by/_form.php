<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PayBy */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="pay-by-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'pay_by_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cos_id')->textInput() ?>

    <?= $form->field($model, 'closing_payment_id')->textInput() ?>

    <?= $form->field($model, 'authorize_cos_change')->textInput() ?>

    <?= $form->field($model, 'dept_availability')->textInput() ?>

    <?= $form->field($model, 'item_availability')->textInput() ?>

    <?= $form->field($model, 'follow_cos')->textInput() ?>

    <?= $form->field($model, 'created_user_id')->textInput() ?>

    <?= $form->field($model, 'created_time')->textInput() ?>

    <?= $form->field($model, 'modified_user_id')->textInput() ?>

    <?= $form->field($model, 'modified_time')->textInput() ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'check_membership')->textInput() ?>

    <?= $form->field($model, 'bpjs_online')->textInput() ?>

    <?= $form->field($model, 'disabled')->textInput() ?>

    <?= $form->field($model, 'disabled_reason')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pay_by_group')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pay_by_group_ext')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'used_by_web_reservation')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
