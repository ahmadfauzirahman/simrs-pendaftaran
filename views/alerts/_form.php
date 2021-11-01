<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Alerts */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="alerts-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'alert_id')->textInput() ?>

    <?= $form->field($model, 'report_id')->textInput() ?>

    <?= $form->field($model, 'alert_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alert_table')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'detail_alert_table')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'detail_alert_field_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'detail_alert_field_no')->textInput() ?>

    <?= $form->field($model, 'alert_auto_width')->textInput() ?>

    <?= $form->field($model, 'detail_alert_auto_width')->textInput() ?>

    <?= $form->field($model, 'alert_description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'show_in_detail')->textInput() ?>

    <?= $form->field($model, 'show_params')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
