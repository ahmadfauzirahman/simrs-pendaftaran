<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\InformasiNotesExt */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="informasi-notes-ext-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'informasi_id')->textInput() ?>

    <?= $form->field($model, 'informasi_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'informasi_date')->textInput() ?>

    <?= $form->field($model, 'warehouse_id')->textInput() ?>

    <?= $form->field($model, 'notes')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'created_user_id')->textInput() ?>

    <?= $form->field($model, 'created_time')->textInput() ?>

    <?= $form->field($model, 'modified_user_id')->textInput() ?>

    <?= $form->field($model, 'modified_time')->textInput() ?>

    <?= $form->field($model, 'validasi_unit')->textInput() ?>

    <?= $form->field($model, 'posted')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
