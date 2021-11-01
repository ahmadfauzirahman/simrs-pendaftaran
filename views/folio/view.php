<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Folio */

$this->title = $model->folio_id;
$this->params['breadcrumbs'][] = ['label' => 'Folios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <p>
                        <?= Html::a('Update', ['update', 'id' => $model->folio_id], ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('Delete', ['delete', 'id' => $model->folio_id], [
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
                            'folio_id',
                            'folio_no',
                            'folio_date',
                            'registration_id',
                            'dept_id',
                            'unit_id',
                            'sub_unit_id',
                            'service_date',
                            'service_time',
                            'amount',
                            'amount_pmt',
                            'owing_self',
                            'self_amount',
                            'owing_pay_by',
                            'items_net_amount',
                            'disc_pc',
                            'pay_by_amount',
                            'disc_amount',
                            'cos_service_id',
                            'cos_requested_id',
                            'cos_pay_id',
                            'folio_status',
                            'parent_folio_id',
                            'medical_status',
                            'anamnesa:ntext',
                            'anamnesa_pic',
                            'prognosa:ntext',
                            'allergy:ntext',
                            'degenerative:ntext',
                            'notes:ntext',
                            'created_user_id',
                            'created_time',
                            'modified_user_id',
                            'modified_time',
                            'diagnose:ntext',
                            'procedure_memo:ntext',
                            'pay_by_id',
                            'tax1_id',
                            'tax2_id',
                            'tax1_rate',
                            'tax2_rate',
                            'tax1_amount',
                            'tax2_amount',
                            'show_all_units',
                            'primary_doctor_id',
                            'secondary_doctor_id',
                            'end_service_date',
                            'end_service_time',
                            'view_from_date',
                            'show_available_day_only',
                            'view_day_week_month',
                            'overflow',
                            'cancellation_reason',
                            'refer_folio_id',
                            'physical_exam:ntext',
                            'other_exam_notes:ntext',
                            'q_number',
                            'validated',
                            'main_folio_id',
                            'bpjs_print_no',
                            'referral_print_no',
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