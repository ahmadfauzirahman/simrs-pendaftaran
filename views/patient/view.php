<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Patient */

$this->title = $model->patient_id;
$this->params['breadcrumbs'][] = ['label' => 'Patients', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <p>
                        <?= Html::a('Update', ['update', 'id' => $model->patient_id], ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('Delete', ['delete', 'id' => $model->patient_id], [
                            'class' => 'btn btn-danger',
                            'data' => [
                                'confirm' => 'Are you sure you want to delete this item?',
                                'method' => 'post',
                            ],
                        ]) ?>
                    </p>
                    <?= DetailView::widget([
                        'model' => $model,
                        'attributes' => [
                            'patient_id',
                            'medrec_no',
                            'patient_name',
                            'salutation',
                            'alias',
                            'mother_maiden_name',
                            'address_line1',
                            'address_line2',
                            'identity_id',
                            'blood_type_id',
                            'religion_id',
                            'patient_type_id',
                            'patient_group_id',
                            'marital_status_id',
                            'nationality_id',
                            'education_id',
                            'identity_no',
                            'identity_expiry_date',
                            'member_card',
                            'member_card_exp',
                            'homephone',
                            'handphone',
                            'fax',
                            'email:email',
                            'place_of_birth',
                            'birth_date',
                            'sex',
                            'registration_date',
                            'photo',
                            'notes:ntext',
                            'pay_id_card_no',
                            'created_user_id',
                            'created_time',
                            'modified_user_id',
                            'modified_time',
                            'country',
                            'province',
                            'city',
                            'zipcode',
                            'district',
                            'subdistrict',
                            'village',
                            'rt',
                            'rw',
                            'id_address_line1',
                            'id_address_line2',
                            'id_city',
                            'id_zipcode',
                            'id_country',
                            'id_province',
                            'id_district',
                            'id_subdistrict',
                            'id_village',
                            'id_rt',
                            'id_rw',
                            'pay_by_id',
                            'allergy:ntext',
                            'degenerative:ntext',
                            'chronic_disease:ntext',
                            'occupation',
                            'excess_by_patient',
                            'contact_seq_pay',
                            'disabled',
                            'disabled_reason',
                            'storage_shelf_no',
                            'storage_remark',
                            'storage_last_access',
                            'storage_last_user',
                            'storage_content',
                            'storage_last_purged',
                            'ethnicity_id',
                            'status_patient',
                            'bpjs_verified_by',
                            'bpjs_verified_time',
                            'bpjs_insurance_name',
                            'bpjs_insurance_no',
                            'bpjs_insurance_tat_date',
                            'bpjs_insurance_tmt_date',
                            'ffs_aproval',
                            'ffs_date',
                            'num_print_identity',
                        ],
                    ]) ?>
                </div>
                <!--.col-md-12-->
            </div>
            <!--.row-->
        </div>
        <!--.card-body-->
    </div>
    <!--.card-->
</div>