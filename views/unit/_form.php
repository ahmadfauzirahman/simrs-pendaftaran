<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Unit */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="unit-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'dept_id')->textInput() ?>

    <?= $form->field($model, 'unit_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sub_unit_caption')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'person_in_charge')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status_available')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status_used')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status_housekeep')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status_maintenance')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sub_unit_availability')->textInput() ?>

    <?= $form->field($model, 'created_user_id')->textInput() ?>

    <?= $form->field($model, 'created_time')->textInput() ?>

    <?= $form->field($model, 'modified_user_id')->textInput() ?>

    <?= $form->field($model, 'modified_time')->textInput() ?>

    <?= $form->field($model, 'small_icon')->textInput() ?>

    <?= $form->field($model, 'large_icon')->textInput() ?>

    <?= $form->field($model, 'tax1_id')->textInput() ?>

    <?= $form->field($model, 'tax2_id')->textInput() ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'med_status_open')->textInput() ?>

    <?= $form->field($model, 'med_status_close')->textInput() ?>

    <?= $form->field($model, 'patient_ar_gl_acc_id')->textInput() ?>

    <?= $form->field($model, 'order_entry_after_reg')->textInput() ?>

    <?= $form->field($model, 'readonly_order_entry')->textInput() ?>

    <?= $form->field($model, 'gl_jtype_id')->textInput() ?>

    <?= $form->field($model, 'undetermined_end_servicedate')->textInput() ?>

    <?= $form->field($model, 'refer_unit_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'use_web_reservation')->textInput() ?>

    <?= $form->field($model, 'q_no')->textInput() ?>

    <?= $form->field($model, 'q_date')->textInput() ?>

    <?= $form->field($model, 'q_play')->textInput() ?>

    <?= $form->field($model, 'q_view')->textInput() ?>

    <?= $form->field($model, 'sex')->textInput() ?>

    <?= $form->field($model, 'q_mark')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
