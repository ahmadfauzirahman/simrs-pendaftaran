<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Wallpaper */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="wallpaper-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'wallpaper_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'picture')->textInput() ?>

    <?= $form->field($model, 'built_in')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
