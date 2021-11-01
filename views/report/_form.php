<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Report */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="report-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'report_id')->textInput() ?>

    <?= $form->field($model, 'report_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'report_group_id')->textInput() ?>

    <?= $form->field($model, 'report_type')->textInput() ?>

    <?= $form->field($model, 'is_group')->textInput() ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'report_data')->textInput() ?>

    <?= $form->field($model, 'category_id')->textInput() ?>

    <?= $form->field($model, 'keyword')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'main_query_id')->textInput() ?>

    <?= $form->field($model, 'owner')->textInput() ?>

    <?= $form->field($model, 'created_user_id')->textInput() ?>

    <?= $form->field($model, 'created_time')->textInput() ?>

    <?= $form->field($model, 'modified_user_id')->textInput() ?>

    <?= $form->field($model, 'modified_time')->textInput() ?>

    <?= $form->field($model, 'sample_picture')->textInput() ?>

    <?= $form->field($model, 'sql_after_print')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'url_before_print')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'url_before_print_show')->textInput() ?>

    <?= $form->field($model, 'url_before_print_x')->textInput() ?>

    <?= $form->field($model, 'url_before_print_y')->textInput() ?>

    <?= $form->field($model, 'url_after_print')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'url_after_print_show')->textInput() ?>

    <?= $form->field($model, 'url_after_print_x')->textInput() ?>

    <?= $form->field($model, 'url_after_print_y')->textInput() ?>

    <?= $form->field($model, 'email_subject')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email_body')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'email_every')->textInput() ?>

    <?= $form->field($model, 'last_execute')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
