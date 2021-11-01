<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Registration */

$this->title = $model->registration_id;
$this->params['breadcrumbs'][] = ['label' => 'Registrations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <p>
                        <?= Html::a('Update', ['update', 'id' => $model->registration_id], ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('Delete', ['delete', 'id' => $model->registration_id], [
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
                            'registration_id',
                            'patient_id',
                            'registration_no',
                            'registration_date',
                            'pay_by_id',
                            'contact_seq_pay',
                            'status',
                            'pay_by_amount',
                            'self_amount',
                            'amount',
                            'owing_pay_by',
                            'owing_self',
                            'first_folio_id',
                            'refer_no',
                            'refer_from_no',
                            'refer_from_date',
                            'refer_from_doctor',
                            'refer_from_hospital',
                            'refer_from_diagnose_code',
                            'refer_from_diagnose:ntext',
                            'refer_from_cause',
                            'notes:ntext',
                            'created_user_id',
                            'created_time',
                            'modified_user_id',
                            'modified_time',
                            'excess_by_patient',
                            'ref_type_id',
                            'q_number',
                            'reservation_date',
                            'main_folio_id',
                            'dept_id',
                            'status_id',
                            'status_patient',
                            'bpjs_verified_by',
                            'bpjs_verfied_time',
                            'reg_bpjs_verified_by',
                            'reg_bpjs_verified_time',
                            'reg_bpjs_discharge_by',
                            'reg_bpjs_discharge_time',
                            'reg_bpjs_discharge_notes',
                            'apotik_id',
                            'reg_end_date',
                            'new_reg',
                            'main_dept_id',
                            'aproval_ffs_is',
                            'sep_no',
                            'episode',
                            'ffs_date',
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