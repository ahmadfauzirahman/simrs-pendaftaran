<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BpjsPpkType */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="bpjs-ppk-type-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ppk_type_id')->textInput() ?>

    <?= $form->field($model, 'type_name')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
