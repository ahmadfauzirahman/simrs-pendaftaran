<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\SubUnitSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sub Units';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-md-12">
                            <?= Html::a('Create Sub Unit', ['create'], ['class' => 'btn btn-success']) ?>
                        </div>
                    </div>


                    <?php Pjax::begin(); ?>
                    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],

                            'sub_unit_id',
                            'update_status',
                            'duration',
                            'unlimited_time:datetime',
                            'unit_id',
                            //'sub_unit_name',
                            //'queue_prefix',
                            //'floor_location',
                            //'person_in_charge',
                            //'location_id',
                            //'phone',
                            //'status',
                            //'created_user_id',
                            //'created_time',
                            //'modified_user_id',
                            //'modified_time',
                            //'notes:ntext',
                            //'patient_limit',
                            //'total_patient_limit',
                            //'max_patient_limit',
                            //'overflow_slot',
                            //'reservation_slot',
                            //'small_icon',
                            //'large_icon',
                            //'warehouse_id',
                            //'primary_doctor_id',
                            //'secondary_doctor_id',
                            //'refer_pharmacy',
                            //'refer_other_exam',
                            //'disabled',
                            //'sex',
                            //'lims_intf',
                            //'unavailable_from',
                            //'unavailable_to',
                            //'unavailable_message',
                            //'refer_sub_unit_code',
                            //'n_day_rsvp_start',
                            //'n_day_rsvp',
                            //'rsvp_got_q_number',
                            //'rsvp_start',
                            //'rsvp_end',
                            //'q_start',
                            //'use_web_reservation',
                            //'sub_unit_unavailable_url:url',
                            //'sip_no',
                            //'use_arm_reservation',
                            //'status_id',
                            //'reg_id',
                            //'sensus_date',
                            //'time',
                            //'patient_booking',
                            //'description',
                            //'renpul',
                            //'desc_ruangan',
                            //'q_no',
                            //'q_date',
                            //'q_play',
                            //'q_view',
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
