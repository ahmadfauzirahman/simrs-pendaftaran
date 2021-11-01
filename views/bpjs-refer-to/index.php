<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\BpjsReferToSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Bpjs Refer Tos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-md-12">
                            <?= Html::a('Create Bpjs Refer To', ['create'], ['class' => 'btn btn-success']) ?>
                        </div>
                    </div>


                    <?php Pjax::begin(); ?>
                    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],

                            'folio_id',
                            'patient_id',
                            'refer_type',
                            'refer_service',
                            'refer_notes',
                            //'refer_from_code',
                            //'refer_from_name',
                            //'refer_diag_code',
                            //'refer_diag_name',
                            //'refer_no',
                            //'refer_date',
                            //'refer_patient_insurance',
                            //'refer_patient_cos',
                            //'refer_patient_jenis_peserta',
                            //'refer_patient_sex',
                            //'refer_patient_name',
                            //'refer_patient_card_no',
                            //'refer_patient_medrec',
                            //'refer_patient_birth_date',
                            //'refer_to_code',
                            //'refer_to_name',
                            //'refer_to_clinic',
                            //'refer_to_clinic_name',
                            //'created_by',
                            //'created_time',
                            //'status',

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
