<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\IdStaff */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="id-staff-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'next_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
