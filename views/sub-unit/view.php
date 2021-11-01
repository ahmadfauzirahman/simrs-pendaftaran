<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\SubUnit */

$this->title = $model->sub_unit_id;
$this->params['breadcrumbs'][] = ['label' => 'Sub Units', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <p>
                        <?= Html::a('Update', ['update', 'id' => $model->sub_unit_id], ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('Delete', ['delete', 'id' => $model->sub_unit_id], [
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
                            'sub_unit_id',
                            'update_status',
                            'duration',
                            'unlimited_time:datetime',
                            'unit_id',
                            'sub_unit_name',
                            'queue_prefix',
                            'floor_location',
                            'person_in_charge',
                            'location_id',
                            'phone',
                            'status',
                            'created_user_id',
                            'created_time',
                            'modified_user_id',
                            'modified_time',
                            'notes:ntext',
                            'patient_limit',
                            'total_patient_limit',
                            'max_patient_limit',
                            'overflow_slot',
                            'reservation_slot',
                            'small_icon',
                            'large_icon',
                            'warehouse_id',
                            'primary_doctor_id',
                            'secondary_doctor_id',
                            'refer_pharmacy',
                            'refer_other_exam',
                            'disabled',
                            'sex',
                            'lims_intf',
                            'unavailable_from',
                            'unavailable_to',
                            'unavailable_message',
                            'refer_sub_unit_code',
                            'n_day_rsvp_start',
                            'n_day_rsvp',
                            'rsvp_got_q_number',
                            'rsvp_start',
                            'rsvp_end',
                            'q_start',
                            'use_web_reservation',
                            'sub_unit_unavailable_url:url',
                            'sip_no',
                            'use_arm_reservation',
                            'status_id',
                            'reg_id',
                            'sensus_date',
                            'time',
                            'patient_booking',
                            'description',
                            'renpul',
                            'desc_ruangan',
                            'q_no',
                            'q_date',
                            'q_play',
                            'q_view',
                            'q_mark',
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