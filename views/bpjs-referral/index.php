<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\BpjsReferralSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Bpjs Referrals';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-md-12">
                            <?= Html::a('Create Bpjs Referral', ['create'], ['class' => 'btn btn-success']) ?>
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
                            'bpjs_refer_date',
                            'bpjs_refer_from',
                            'bpjs_refer_from_name',
                            //'bpjs_refer_to',
                            //'bpjs_refer_to_name',
                            //'bpjs_service',
                            //'bpjs_service_to',
                            //'bpjs_service_cos',
                            //'bpjs_from_diagnose_code',
                            //'bpjs_from_diagnose',
                            //'bpjs_from_cause',
                            //'bpjs_from_location',
                            //'bpjs_notes:ntext',
                            //'verified_by',
                            //'verified_time',
                            //'status',
                            //'rujukan_intern',
                            //'no_skdp',

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
