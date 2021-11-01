<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PatientSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="row mt-2">
    <div class="col-md-12">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'patient_id') ?>

    <?= $form->field($model, 'medrec_no') ?>

    <?= $form->field($model, 'patient_name') ?>

    <?= $form->field($model, 'salutation') ?>

    <?= $form->field($model, 'alias') ?>

    <?php // echo $form->field($model, 'mother_maiden_name') ?>

    <?php // echo $form->field($model, 'address_line1') ?>

    <?php // echo $form->field($model, 'address_line2') ?>

    <?php // echo $form->field($model, 'identity_id') ?>

    <?php // echo $form->field($model, 'blood_type_id') ?>

    <?php // echo $form->field($model, 'religion_id') ?>

    <?php // echo $form->field($model, 'patient_type_id') ?>

    <?php // echo $form->field($model, 'patient_group_id') ?>

    <?php // echo $form->field($model, 'marital_status_id') ?>

    <?php // echo $form->field($model, 'nationality_id') ?>

    <?php // echo $form->field($model, 'education_id') ?>

    <?php // echo $form->field($model, 'identity_no') ?>

    <?php // echo $form->field($model, 'identity_expiry_date') ?>

    <?php // echo $form->field($model, 'member_card') ?>

    <?php // echo $form->field($model, 'member_card_exp') ?>

    <?php // echo $form->field($model, 'homephone') ?>

    <?php // echo $form->field($model, 'handphone') ?>

    <?php // echo $form->field($model, 'fax') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'place_of_birth') ?>

    <?php // echo $form->field($model, 'birth_date') ?>

    <?php // echo $form->field($model, 'sex') ?>

    <?php // echo $form->field($model, 'registration_date') ?>

    <?php // echo $form->field($model, 'photo') ?>

    <?php // echo $form->field($model, 'notes') ?>

    <?php // echo $form->field($model, 'pay_id_card_no') ?>

    <?php // echo $form->field($model, 'created_user_id') ?>

    <?php // echo $form->field($model, 'created_time') ?>

    <?php // echo $form->field($model, 'modified_user_id') ?>

    <?php // echo $form->field($model, 'modified_time') ?>

    <?php // echo $form->field($model, 'country') ?>

    <?php // echo $form->field($model, 'province') ?>

    <?php // echo $form->field($model, 'city') ?>

    <?php // echo $form->field($model, 'zipcode') ?>

    <?php // echo $form->field($model, 'district') ?>

    <?php // echo $form->field($model, 'subdistrict') ?>

    <?php // echo $form->field($model, 'village') ?>

    <?php // echo $form->field($model, 'rt') ?>

    <?php // echo $form->field($model, 'rw') ?>

    <?php // echo $form->field($model, 'id_address_line1') ?>

    <?php // echo $form->field($model, 'id_address_line2') ?>

    <?php // echo $form->field($model, 'id_city') ?>

    <?php // echo $form->field($model, 'id_zipcode') ?>

    <?php // echo $form->field($model, 'id_country') ?>

    <?php // echo $form->field($model, 'id_province') ?>

    <?php // echo $form->field($model, 'id_district') ?>

    <?php // echo $form->field($model, 'id_subdistrict') ?>

    <?php // echo $form->field($model, 'id_village') ?>

    <?php // echo $form->field($model, 'id_rt') ?>

    <?php // echo $form->field($model, 'id_rw') ?>

    <?php // echo $form->field($model, 'pay_by_id') ?>

    <?php // echo $form->field($model, 'allergy') ?>

    <?php // echo $form->field($model, 'degenerative') ?>

    <?php // echo $form->field($model, 'chronic_disease') ?>

    <?php // echo $form->field($model, 'occupation') ?>

    <?php // echo $form->field($model, 'excess_by_patient') ?>

    <?php // echo $form->field($model, 'contact_seq_pay') ?>

    <?php // echo $form->field($model, 'disabled') ?>

    <?php // echo $form->field($model, 'disabled_reason') ?>

    <?php // echo $form->field($model, 'storage_shelf_no') ?>

    <?php // echo $form->field($model, 'storage_remark') ?>

    <?php // echo $form->field($model, 'storage_last_access') ?>

    <?php // echo $form->field($model, 'storage_last_user') ?>

    <?php // echo $form->field($model, 'storage_content') ?>

    <?php // echo $form->field($model, 'storage_last_purged') ?>

    <?php // echo $form->field($model, 'ethnicity_id') ?>

    <?php // echo $form->field($model, 'status_patient') ?>

    <?php // echo $form->field($model, 'bpjs_verified_by') ?>

    <?php // echo $form->field($model, 'bpjs_verified_time') ?>

    <?php // echo $form->field($model, 'bpjs_insurance_name') ?>

    <?php // echo $form->field($model, 'bpjs_insurance_no') ?>

    <?php // echo $form->field($model, 'bpjs_insurance_tat_date') ?>

    <?php // echo $form->field($model, 'bpjs_insurance_tmt_date') ?>

    <?php // echo $form->field($model, 'ffs_aproval') ?>

    <?php // echo $form->field($model, 'ffs_date') ?>

    <?php // echo $form->field($model, 'num_print_identity') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    </div>
    <!--.col-md-12-->
</div>
