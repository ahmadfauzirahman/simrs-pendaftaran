<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Regeklaim */

$this->title = $model->registration_id;
$this->params['breadcrumbs'][] = ['label' => 'Regeklaims', 'url' => ['index']];
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
                            'jns_rawat',
                            'dat_icd_code',
                            'dat_icd:ntext',
                            'dat_proc_code',
                            'dat_proc:ntext',
                            'tgl_masuk',
                            'tgl_keluar',
                            'unit_name',
                            'sub_unit_name',
                            'billing',
                            'prosedur_non_bedah',
                            'prosedur_bedah',
                            'konsultasi',
                            'tenaga_ahli',
                            'perawatan',
                            'penunjang',
                            'radiologi',
                            'laboratorium',
                            'pelayanan_darah',
                            'rehabilitasi',
                            'kamar',
                            'rawat_intensif',
                            'obat',
                            'obat_kronis',
                            'obat_kemoterapi',
                            'alkes',
                            'bmhp',
                            'sewa_alat',
                            'kelas_rawat',
                            'adl_sub_acute',
                            'adl_chronic',
                            'icu_indikator',
                            'icu_los',
                            'ventilator_hour',
                            'upgrade_class_ind',
                            'upgrade_class_class',
                            'upgrade_class_los',
                            'add_payment_pct',
                            'birth_weight',
                            'discharge_status',
                            'tarif_rs',
                            'tarif_poli_eks',
                            'nama_dokter',
                            'kode_tarif',
                            'payor_id',
                            'payor_cd',
                            'cob_cd',
                            'coder_nik',
                            'create_claim',
                            'update_patient',
                            'delete_claim',
                            'delete_patient',
                            'fill_claim',
                            'grouper_st1',
                            'grouper_st2',
                            'grouper_st1_value:ntext',
                            'grouper_cmg_value:ntext',
                            'grouper_st2_value:ntext',
                            'finalize_claim',
                            'reedit_claim',
                            'send_claim',
                            'status_claim',
                            'status_claim_value:ntext',
                            'pdf_claim',
                            'pdf_claim_value',
                            'detail_claim',
                            'detail_claim_value:ntext',
                            'create_claim_time',
                            'update_patient_time',
                            'delete_claim_time',
                            'delete_patient_time',
                            'fill_claim_time',
                            'grouper_st1_time',
                            'grouper_st2_time',
                            'finalize_claim_time',
                            'reedit_claim_time',
                            'send_claim_time',
                            'status_claim_time',
                            'pdf_claim_time',
                            'detail_claim_time',
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