<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\KirimlisSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kirimlis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-md-12">
                            <?= Html::a('Create Kirimlis', ['create'], ['class' => 'btn btn-success']) ?>
                        </div>
                    </div>


                    <?php Pjax::begin(); ?>
                    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],

                            'kode',
                            'modified_date',
                            'No_Pasien',
                            'Kode_Kunjungan',
                            'Nama',
                            //'Email:email',
                            //'Date_of_birth',
                            //'UmurTahun',
                            //'UmurBulan',
                            //'UmurHari',
                            //'Gender',
                            //'Alamat',
                            //'Diagnosa',
                            //'Tgl_Periksa',
                            //'Pengirim',
                            //'pengirim_name',
                            //'Kelas',
                            //'kelas_name',
                            //'Ruang',
                            //'ruang_name',
                            //'Cara_Bayar',
                            //'cara_bayar_name',
                            //'Kode_Tarif',
                            //'IS_Inap',
                            //'Status',
                            //'is_update',
                            //'reg_no',
                            //'labp_id',
                            //'lp_id',
                            //'lab_id',
                            //'id_tmp',

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
