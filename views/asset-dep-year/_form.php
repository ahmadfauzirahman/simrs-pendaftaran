<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AssetDepYear */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="asset-dep-year-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'asset_id')->textInput() ?>

    <?= $form->field($model, 'year_no')->textInput() ?>

    <?= $form->field($model, 'rate_year')->textInput() ?>

    <?= $form->field($model, 'dep_year')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'acc_dep_year')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'book_value')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
