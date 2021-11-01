<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RegistrationFill */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="registration-fill-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'registration_id')->textInput() ?>

    <?= $form->field($model, 'patient_id')->textInput() ?>

    <?= $form->field($model, 'registration_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'registration_date')->textInput() ?>

    <?= $form->field($model, 'pay_by_id')->textInput() ?>

    <?= $form->field($model, 'contact_seq_pay')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'pay_by_amount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'self_amount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'amount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'owing_pay_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'owing_self')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'first_folio_id')->textInput() ?>

    <?= $form->field($model, 'refer_from_doctor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'refer_from_hospital')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'refer_from_diagnose')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'notes')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'created_user_id')->textInput() ?>

    <?= $form->field($model, 'created_time')->textInput() ?>

    <?= $form->field($model, 'modified_user_id')->textInput() ?>

    <?= $form->field($model, 'modified_time')->textInput() ?>

    <?= $form->field($model, 'excess_by_patient')->textInput() ?>

    <?= $form->field($model, 'ref_type_id')->textInput() ?>

    <?= $form->field($model, 'q_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'reservation_date')->textInput() ?>

    <?= $form->field($model, 'main_folio_id')->textInput() ?>

    <?= $form->field($model, 'process')->dropDownList([ 'Y' => 'Y', 'N' => 'N', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
