<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\BpjsReferral */

$this->title = $model->patient_id;
$this->params['breadcrumbs'][] = ['label' => 'Bpjs Referrals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <p>
                        <?= Html::a('Update', ['update', 'patient_id' => $model->patient_id, 'bpjs_refer_no' => $model->bpjs_refer_no], ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('Delete', ['delete', 'patient_id' => $model->patient_id, 'bpjs_refer_no' => $model->bpjs_refer_no], [
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
                            'bpjs_refer_no',
                            'bpjs_refer_date',
                            'bpjs_refer_from',
                            'bpjs_refer_from_name',
                            'bpjs_refer_to',
                            'bpjs_refer_to_name',
                            'bpjs_service',
                            'bpjs_service_to',
                            'bpjs_service_cos',
                            'bpjs_from_diagnose_code',
                            'bpjs_from_diagnose',
                            'bpjs_from_cause',
                            'bpjs_from_location',
                            'bpjs_notes:ntext',
                            'verified_by',
                            'verified_time',
                            'status',
                            'rujukan_intern',
                            'no_skdp',
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