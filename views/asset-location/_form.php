<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AssetLocation */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="asset-location-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'asset_location_id')->textInput() ?>

    <?= $form->field($model, 'asset_location_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'asset_id')->textInput() ?>

    <?= $form->field($model, 'location_date')->textInput() ?>

    <?= $form->field($model, 'location_id')->textInput() ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'posted')->textInput() ?>

    <?= $form->field($model, 'notes')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'created_user_id')->textInput() ?>

    <?= $form->field($model, 'created_time')->textInput() ?>

    <?= $form->field($model, 'modified_user_id')->textInput() ?>

    <?= $form->field($model, 'modified_time')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
