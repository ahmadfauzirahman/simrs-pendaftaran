<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Exam */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="exam-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'exam_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'report_seq')->textInput() ?>

    <?= $form->field($model, 'exam_value')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'exam_method')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'int_ip_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'equipment_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'test_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'header_format')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kategori1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_user_id')->textInput() ?>

    <?= $form->field($model, 'created_time')->textInput() ?>

    <?= $form->field($model, 'modified_user_id')->textInput() ?>

    <?= $form->field($model, 'modified_time')->textInput() ?>

    <?= $form->field($model, 'exam_type')->textInput() ?>

    <?= $form->field($model, 'uom')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'item_id')->textInput() ?>

    <?= $form->field($model, 'exam_name_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'test_id_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'header_format_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'exam_result_m')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'exam_result_f')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'print_seq')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
