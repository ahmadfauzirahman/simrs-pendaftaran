<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\RegEklaimSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Regeklaims';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-md-12">
                            <?= Html::a('Create Regeklaim', ['create'], ['class' => 'btn btn-success']) ?>
                        </div>
                    </div>


                    <?php Pjax::begin(); ?>
                    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],

                            'registration_id',
                            'jns_rawat',
                            'dat_icd_code',
                            'dat_icd:ntext',
                            'dat_proc_code',
                            //'dat_proc:ntext',
                            //'tgl_masuk',
                            //'tgl_keluar',
                            //'unit_name',
                            //'sub_unit_name',
                            //'billing',
                            //'prosedur_non_bedah',
                            //'prosedur_bedah',
                            //'konsultasi',
                            //'tenaga_ahli',
                            //'perawatan',
                            //'penunjang',
                            //'radiologi',
                            //'laboratorium',
                            //'pelayanan_darah',
                            //'rehabilitasi',
                            //'kamar',
                            //'rawat_intensif',
                            //'obat',
                            //'obat_kronis',
                            //'obat_kemoterapi',
                            //'alkes',
                            //'bmhp',
                            //'sewa_alat',
                            //'kelas_rawat',
                            //'adl_sub_acute',
                            //'adl_chronic',
                            //'icu_indikator',
                            //'icu_los',
                            //'ventilator_hour',
                            //'upgrade_class_ind',
                            //'upgrade_class_class',
                            //'upgrade_class_los',
                            //'add_payment_pct',
                            //'birth_weight',
                            //'discharge_status',
                            //'tarif_rs',
                            //'tarif_poli_eks',
                            //'nama_dokter',
                            //'kode_tarif',
                            //'payor_id',
                            //'payor_cd',
                            //'cob_cd',
                            //'coder_nik',
                            //'create_claim',
                            //'update_patient',
                            //'delete_claim',
                            //'delete_patient',
                            //'fill_claim',
                            //'grouper_st1',
                            //'grouper_st2',
                            //'grouper_st1_value:ntext',
                            //'grouper_cmg_value:ntext',
                            //'grouper_st2_value:ntext',
                            //'finalize_claim',
                            //'reedit_claim',
                            //'send_claim',
                            //'status_claim',
                            //'status_claim_value:ntext',
                            //'pdf_claim',
                            //'pdf_claim_value',
                            //'detail_claim',
                            //'detail_claim_value:ntext',
                            //'create_claim_time',
                            //'update_patient_time',
                            //'delete_claim_time',
                            //'delete_patient_time',
                            //'fill_claim_time',
                            //'grouper_st1_time',
                            //'grouper_st2_time',
                            //'finalize_claim_time',
                            //'reedit_claim_time',
                            //'send_claim_time',
                            //'status_claim_time',
                            //'pdf_claim_time',
                            //'detail_claim_time',

                            ['class' => 'hail812\adminlte3\yii\grid\ActionColumn'],
                        ],
                        'summaryOptions' => ['class' => 'summary mb-2'],
                        'pager' => [
                            'class' => 'yii\bootstrap4\LinkPager',
                        ]
                    ]); ?>

                    <?php Pjax::end(); ?>

                </div>
                <!--.card-body-->
            </div>
            <!--.card-->
        </div>
        <!--.col-md-12-->
    </div>
    <!--.row-->
</div>
