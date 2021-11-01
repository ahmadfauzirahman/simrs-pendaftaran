<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\FolioSurveilensSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Folio Surveilens';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-md-12">
                            <?= Html::a('Create Folio Surveilens', ['create'], ['class' => 'btn btn-success']) ?>
                        </div>
                    </div>


                    <?php Pjax::begin(); ?>
                    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],

                            'tindakan_id',
                            'registration_id',
                            'diagnosaMasuk',
                            'jenisTindakan',
                            'lokasi',
                            //'tanggalPasang',
                            //'tanggalCabut',
                            //'totalHari',
                            //'tanggalInfeksi',
                            //'catatan',
                            //'diagnosa',
                            //'tanggalOperasi1',
                            //'lamaOperasi1',
                            //'tanggalOperasi2',
                            //'lamaOperasi2',
                            //'jenisOperasi',
                            //'tindakanOperasi',
                            //'asaScore',
                            //'ido',
                            //'idoHari',
                            //'idoKultur',
                            //'isk',
                            //'iskHari',
                            //'iskKultur',
                            //'pneumonia',
                            //'pneumoniaHari',
                            //'pneumoniaKultur',
                            //'iadp',
                            //'iadpHari',
                            //'iadpKultur',
                            //'lain',
                            //'lainHari',
                            //'lainKultur',
                            //'dosis1',
                            //'jmlDosis1',
                            //'tglMulaiDosis1',
                            //'tglSelsaiDosis1',
                            //'dosis2',
                            //'jmlDosis2',
                            //'tglMulaiDosis2',
                            //'tglSelsaiDosis2',
                            //'dosis3',
                            //'jmlDosis3',
                            //'tglMulaiDosis3',
                            //'tglSelsaiDosis3',
                            //'dosis4',
                            //'jmlDosis4',
                            //'tglMulaiDosis4',
                            //'tglSelsaiDosis4',
                            //'waktuPemberian',
                            //'tglPasienKeluar',
                            //'pindahRs',
                            //'diagnosaTerakhir',
                            //'faktorPenyakit',
                            //'radiologi',
                            //'labor',

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
