<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DeptUser */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="dept-user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'dept_id')->textInput() ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
