<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\RegistrationFillSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Registration Fills';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-md-12">
                            <?= Html::a('Create Registration Fill', ['create'], ['class' => 'btn btn-success']) ?>
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
                            //'refer_from_doctor',
                            //'refer_from_hospital',
                            //'refer_from_diagnose:ntext',
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
                            //'process',

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
