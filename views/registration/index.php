<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\RegistrationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Registrations';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-md-12">
                            <?= Html::a('Create Registration', ['create'], ['class' => 'btn btn-success']) ?>
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
                            'patient_id',
                            'registration_no',
                            'registration_date',
                            'pay_by_id',
                            //'contact_seq_pay',
                            //'status',
                            //'pay_by_amount',
                            //'self_amount',
                            //'amount',
                            //'owing_pay_by',
                            //'owing_self',
                            //'first_folio_id',
                            //'refer_no',
                            //'refer_from_no',
                            //'refer_from_date',
                            //'refer_from_doctor',
                            //'refer_from_hospital',
                            //'refer_from_diagnose_code',
                            //'refer_from_diagnose:ntext',
                            //'refer_from_cause',
                            //'notes:ntext',
                            //'created_user_id',
                            //'created_time',
                            //'modified_user_id',
                            //'modified_time',
                            //'excess_by_patient',
                            //'ref_type_id',
                            //'q_number',
                            //'reservation_date',
                            //'main_folio_id',
                            //'dept_id',
                            //'status_id',
                            //'status_patient',
                            //'bpjs_verified_by',
                            //'bpjs_verfied_time',
                            //'reg_bpjs_verified_by',
                            //'reg_bpjs_verified_time',
                            //'reg_bpjs_discharge_by',
                            //'reg_bpjs_discharge_time',
                            //'reg_bpjs_discharge_notes',
                            //'apotik_id',
                            //'reg_end_date',
                            //'new_reg',
                            //'main_dept_id',
                            //'aproval_ffs_is',
                            //'sep_no',
                            //'episode',
                            //'ffs_date',

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
