<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BpjsActLog */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="bpjs-act-log-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'bpjs_act_time')->textInput() ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'ip_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'comp_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'query_url')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'query_result')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
