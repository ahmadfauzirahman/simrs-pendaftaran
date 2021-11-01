<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\UnitSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Units';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-md-12">
                            <?= Html::a('Create Unit', ['create'], ['class' => 'btn btn-success']) ?>
                        </div>
                    </div>


                    <?php Pjax::begin(); ?>
                    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],

                            'unit_id',
                            'dept_id',
                            'unit_name',
                            'sub_unit_caption',
                            'person_in_charge',
                            //'status_available',
                            //'status_used',
                            //'status_housekeep',
                            //'status_maintenance',
                            //'sub_unit_availability',
                            //'created_user_id',
                            //'created_time',
                            //'modified_user_id',
                            //'modified_time',
                            //'small_icon',
                            //'large_icon',
                            //'tax1_id',
                            //'tax2_id',
                            //'description:ntext',
                            //'med_status_open',
                            //'med_status_close',
                            //'patient_ar_gl_acc_id',
                            //'order_entry_after_reg',
                            //'readonly_order_entry',
                            //'gl_jtype_id',
                            //'undetermined_end_servicedate',
                            //'refer_unit_code',
                            //'use_web_reservation',
                            //'q_no',
                            //'q_date',
                            //'q_play',
                            //'q_view',
                            //'sex',
                            //'q_mark',

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
