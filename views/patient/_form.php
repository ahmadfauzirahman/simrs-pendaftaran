<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Patient */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="patient-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'patient_id')->textInput() ?>

    <?= $form->field($model, 'medrec_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'patient_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'salutation')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alias')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mother_maiden_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address_line1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address_line2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'identity_id')->textInput() ?>

    <?= $form->field($model, 'blood_type_id')->textInput() ?>

    <?= $form->field($model, 'religion_id')->textInput() ?>

    <?= $form->field($model, 'patient_type_id')->textInput() ?>

    <?= $form->field($model, 'patient_group_id')->textInput() ?>

    <?= $form->field($model, 'marital_status_id')->textInput() ?>

    <?= $form->field($model, 'nationality_id')->textInput() ?>

    <?= $form->field($model, 'education_id')->textInput() ?>

    <?= $form->field($model, 'identity_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'identity_expiry_date')->textInput() ?>

    <?= $form->field($model, 'member_card')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'member_card_exp')->textInput() ?>

    <?= $form->field($model, 'homephone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'handphone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fax')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'place_of_birth')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'birth_date')->textInput() ?>

    <?= $form->field($model, 'sex')->textInput() ?>

    <?= $form->field($model, 'registration_date')->textInput() ?>

    <?= $form->field($model, 'photo')->textInput() ?>

    <?= $form->field($model, 'notes')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'pay_id_card_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_user_id')->textInput() ?>

    <?= $form->field($model, 'created_time')->textInput() ?>

    <?= $form->field($model, 'modified_user_id')->textInput() ?>

    <?= $form->field($model, 'modified_time')->textInput() ?>

    <?= $form->field($model, 'country')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'province')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'city')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'zipcode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'district')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'subdistrict')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'village')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rt')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rw')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_address_line1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_address_line2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_city')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_zipcode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_country')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_province')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_district')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_subdistrict')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_village')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_rt')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_rw')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pay_by_id')->textInput() ?>

    <?= $form->field($model, 'allergy')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'degenerative')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'chronic_disease')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'occupation')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'excess_by_patient')->textInput() ?>

    <?= $form->field($model, 'contact_seq_pay')->textInput() ?>

    <?= $form->field($model, 'disabled')->textInput() ?>

    <?= $form->field($model, 'disabled_reason')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'storage_shelf_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'storage_remark')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'storage_last_access')->textInput() ?>

    <?= $form->field($model, 'storage_last_user')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'storage_content')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'storage_last_purged')->textInput() ?>

    <?= $form->field($model, 'ethnicity_id')->textInput() ?>

    <?= $form->field($model, 'status_patient')->textInput() ?>

    <?= $form->field($model, 'bpjs_verified_by')->textInput() ?>

    <?= $form->field($model, 'bpjs_verified_time')->textInput() ?>

    <?= $form->field($model, 'bpjs_insurance_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bpjs_insurance_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bpjs_insurance_tat_date')->textInput() ?>

    <?= $form->field($model, 'bpjs_insurance_tmt_date')->textInput() ?>

    <?= $form->field($model, 'ffs_aproval')->textInput() ?>

    <?= $form->field($model, 'ffs_date')->textInput() ?>

    <?= $form->field($model, 'num_print_identity')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
