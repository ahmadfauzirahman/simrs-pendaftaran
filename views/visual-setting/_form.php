<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\VisualSetting */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="visual-setting-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'company_id')->textInput() ?>

    <?= $form->field($model, 'wallpaper_id')->textInput() ?>

    <?= $form->field($model, 'wp_position')->textInput() ?>

    <?= $form->field($model, 'wp_random')->textInput() ?>

    <?= $form->field($model, 'bk_color')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
