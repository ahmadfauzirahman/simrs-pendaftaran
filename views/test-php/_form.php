<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TestPhp */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="test-php-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'test_php_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'test_php_url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'test_php_descr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
