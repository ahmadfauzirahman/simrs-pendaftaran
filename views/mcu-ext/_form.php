<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\McuExt */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="mcu-ext-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'mcu_id')->textInput() ?>

    <?= $form->field($model, 'mcu_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mcu_date')->textInput() ?>

    <?= $form->field($model, 'customer_id')->textInput() ?>

    <?= $form->field($model, 'item_mcu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dokter_id')->textInput() ?>

    <?= $form->field($model, 'amount')->textInput() ?>

    <?= $form->field($model, 'amount_mcu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lokasi_id')->textInput() ?>

    <?= $form->field($model, 'notes')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'posted')->textInput() ?>

    <?= $form->field($model, 'created_user_id')->textInput() ?>

    <?= $form->field($model, 'created_time')->textInput() ?>

    <?= $form->field($model, 'modified_user_id')->textInput() ?>

    <?= $form->field($model, 'modified_time')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
