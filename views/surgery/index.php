<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\SurgerySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Surgeries';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-md-12">
                            <?= Html::a('Create Surgery', ['create'], ['class' => 'btn btn-success']) ?>
                        </div>
                    </div>


                    <?php Pjax::begin(); ?>
                    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],

                            'reg_id',
                            'staff_ahli_bedah',
                            'staff_ahli_anastesi',
                            'staff_asisten',
                            'staff_nurse_instrumen',
                            //'diag_pra_op:ntext',
                            //'diag_pasca_op:ntext',
                            //'jaringan_eksisi:ntext',
                            //'pemeriksaan_patologi',
                            //'konsul_op',
                            //'staff_konsul',
                            //'op_name:ntext',
                            //'tgl_op',
                            //'start_op',
                            //'end_op',
                            //'end_durasi',
                            //'surgery1:ntext',
                            //'surgery2:ntext',
                            //'surgery3:ntext',
                            //'surgery4:ntext',
                            //'klasifikasi_emergensi',
                            //'klasifikasi_elektif',
                            //'klasifikasi_poliklinis',
                            //'klasifikasi_ods',
                            //'klasifikasi_besar',
                            //'klasifikasi_khusus',
                            //'klasifikasi_sedang',
                            //'klasifikasi_kecil',
                            //'report_surgery_id',
                            //'report_name',
                            //'created_user_id',
                            //'created_time',
                            //'modified_user_id',
                            //'modified_time:datetime',
                            //'posted',

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
