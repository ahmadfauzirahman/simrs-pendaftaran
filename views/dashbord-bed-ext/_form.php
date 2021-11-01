<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DashbordBedExt */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="dashbord-bed-ext-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cos_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jumlah_bed')->textInput() ?>

    <?= $form->field($model, 'terisi')->textInput() ?>

    <?= $form->field($model, 'kosong')->textInput() ?>

    <?= $form->field($model, 'disabled')->textInput() ?>

    <?= $form->field($model, 'created_user_id')->textInput() ?>

    <?= $form->field($model, 'created_time')->textInput() ?>

    <?= $form->field($model, 'modified_user_id')->textInput() ?>

    <?= $form->field($model, 'modified_time')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
