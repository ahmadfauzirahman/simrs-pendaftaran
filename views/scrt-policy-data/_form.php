<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ScrtPolicyData */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="scrt-policy-data-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'policy_id')->textInput() ?>

    <?= $form->field($model, 'data_id')->textInput() ?>

    <?= $form->field($model, 'data_values')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
