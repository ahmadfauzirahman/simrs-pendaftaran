<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AssetMv */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="asset-mv-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'mv_id')->textInput() ?>

    <?= $form->field($model, 'mv_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mv_date')->textInput() ?>

    <?= $form->field($model, 'mv_type')->textInput() ?>

    <?= $form->field($model, 'posted')->textInput() ?>

    <?= $form->field($model, 'person_in_charge')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'notes')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'created_user_id')->textInput() ?>

    <?= $form->field($model, 'created_time')->textInput() ?>

    <?= $form->field($model, 'modified_user_id')->textInput() ?>

    <?= $form->field($model, 'modified_time')->textInput() ?>

    <?= $form->field($model, 'asset_id')->textInput() ?>

    <?= $form->field($model, 'warehouse_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
