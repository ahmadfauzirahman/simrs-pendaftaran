<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\BpjsReferTo */

$this->title = $model->folio_id;
$this->params['breadcrumbs'][] = ['label' => 'Bpjs Refer Tos', 'url' => ['index']];
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
                            'patient_id',
                            'refer_type',
                            'refer_service',
                            'refer_notes',
                            'refer_from_code',
                            'refer_from_name',
                            'refer_diag_code',
                            'refer_diag_name',
                            'refer_no',
                            'refer_date',
                            'refer_patient_insurance',
                            'refer_patient_cos',
                            'refer_patient_jenis_peserta',
                            'refer_patient_sex',
                            'refer_patient_name',
                            'refer_patient_card_no',
                            'refer_patient_medrec',
                            'refer_patient_birth_date',
                            'refer_to_code',
                            'refer_to_name',
                            'refer_to_clinic',
                            'refer_to_clinic_name',
                            'created_by',
                            'created_time',
                            'status',
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