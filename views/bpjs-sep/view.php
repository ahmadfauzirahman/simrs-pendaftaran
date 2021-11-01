<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\BpjsSep */

$this->title = $model->patient_id;
$this->params['breadcrumbs'][] = ['label' => 'Bpjs Seps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <p>
                        <?= Html::a('Update', ['update', 'patient_id' => $model->patient_id, 'bpjs_refer_no' => $model->bpjs_refer_no, 'bpjs_no' => $model->bpjs_no], ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('Delete', ['delete', 'patient_id' => $model->patient_id, 'bpjs_refer_no' => $model->bpjs_refer_no, 'bpjs_no' => $model->bpjs_no], [
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
                            'bpjs_no',
                            'bpjs_refer_date',
                            'bpjs_date',
                            'bpjs_ppk_type',
                            'bpjs_ppk_perujuk',
                            'bpjs_catatan',
                            'bpjs_diagnosa',
                            'bpjs_jns_pelayanan',
                            'bpjs_kelas_rawat',
                            'bpjs_penjamin',
                            'bpjs_peserta_asuransi',
                            'bpjs_hak_kelas',
                            'bpjs_jns_peserta',
                            'bpjs_kelamin',
                            'bpjs_nama',
                            'bpjs_no_kartu',
                            'bpjs_no_mr',
                            'bpjs_tgl_lahir',
                            'bpjs_poli',
                            'bpjs_poli_eksekutif',
                            'bpjs_katarak',
                            'bpjs_laka_date',
                            'bpjs_laka_suplesi',
                            'bpjs_laka_suplesi_no',
                            'bpjs_laka_provinsi',
                            'bpjs_laka_kabupaten',
                            'bpjs_laka_kecamatan',
                            'no_skdp',
                            'kode_dpjp',
                            'bpjs_info_dinsos',
                            'bpjs_info_no_sktm',
                            'bpjs_info_prolanis_prb',
                            'user_id',
                            'his_registration_id',
                            'his_folio_id',
                            'trans_date',
                            'status',
                            'bpjs_discharge_date',
                            'trans_discharge_date',
                            'discharge_by',
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