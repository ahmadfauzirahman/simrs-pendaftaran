<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ScrtPolicyMod */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="scrt-policy-mod-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'policy_id')->textInput() ?>

    <?= $form->field($model, 'mod_id')->textInput() ?>

    <?= $form->field($model, 'standard_actions')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'add_actions')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
