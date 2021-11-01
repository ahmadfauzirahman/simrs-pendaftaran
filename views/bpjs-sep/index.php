<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\BpjsSepSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Bpjs Seps';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-md-12">
                            <?= Html::a('Create Bpjs Sep', ['create'], ['class' => 'btn btn-success']) ?>
                        </div>
                    </div>


                    <?php Pjax::begin(); ?>
                    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],

                            'patient_id',
                            'bpjs_refer_no',
                            'bpjs_no',
                            'bpjs_refer_date',
                            'bpjs_date',
                            //'bpjs_ppk_type',
                            //'bpjs_ppk_perujuk',
                            //'bpjs_catatan',
                            //'bpjs_diagnosa',
                            //'bpjs_jns_pelayanan',
                            //'bpjs_kelas_rawat',
                            //'bpjs_penjamin',
                            //'bpjs_peserta_asuransi',
                            //'bpjs_hak_kelas',
                            //'bpjs_jns_peserta',
                            //'bpjs_kelamin',
                            //'bpjs_nama',
                            //'bpjs_no_kartu',
                            //'bpjs_no_mr',
                            //'bpjs_tgl_lahir',
                            //'bpjs_poli',
                            //'bpjs_poli_eksekutif',
                            //'bpjs_katarak',
                            //'bpjs_laka_date',
                            //'bpjs_laka_suplesi',
                            //'bpjs_laka_suplesi_no',
                            //'bpjs_laka_provinsi',
                            //'bpjs_laka_kabupaten',
                            //'bpjs_laka_kecamatan',
                            //'no_skdp',
                            //'kode_dpjp',
                            //'bpjs_info_dinsos',
                            //'bpjs_info_no_sktm',
                            //'bpjs_info_prolanis_prb',
                            //'user_id',
                            //'his_registration_id',
                            //'his_folio_id',
                            //'trans_date',
                            //'status',
                            //'bpjs_discharge_date',
                            //'trans_discharge_date',
                            //'discharge_by',

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
