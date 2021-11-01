<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BpjsPpk */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="bpjs-ppk-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ppk_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ppk_type_id')->textInput() ?>

    <?= $form->field($model, 'district_bpjs_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ppk_name')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
