<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ScrtPolicyLogin */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="scrt-policy-login-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'policy_id')->textInput() ?>

    <?= $form->field($model, 'seq')->textInput() ?>

    <?= $form->field($model, 'login_day')->textInput() ?>

    <?= $form->field($model, 'login_time')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
