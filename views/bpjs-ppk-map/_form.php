<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BpjsPpkMap */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="bpjs-ppk-map-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kode_ppk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_ppk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jenis_ppk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kabupaten')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
