<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\NPorderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'N Porders';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-md-12">
                            <?= Html::a('Create N Porder', ['create'], ['class' => 'btn btn-success']) ?>
                        </div>
                    </div>


                    <?php Pjax::begin(); ?>
                    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],

                            'order_id',
                            'vendor_id',
                            'order_no',
                            'order_date',
                            'req_received_date',
                            //'term_payment',
                            //'carrier_id',
                            //'ordered_by',
                            //'warehouse_id',
                            //'order_status',
                            //'printed',
                            //'currency_id',
                            //'category_id',
                            //'items_net_amount',
                            //'order_amount',
                            //'tax1_id',
                            //'tax2_id',
                            //'tax1_rate',
                            //'tax2_rate',
                            //'tax1_amount',
                            //'tax2_amount',
                            //'taxable_tax1_id',
                            //'taxable_tax2_id',
                            //'taxable_tax3_id',
                            //'taxable_amount1',
                            //'taxable_amount2',
                            //'taxable_amount3',
                            //'order_disc_pc',
                            //'order_disc_amount',
                            //'shipto',
                            //'shipto_name',
                            //'shipto_address:ntext',
                            //'num_of_receipts',
                            //'notes:ntext',
                            //'created_user_id',
                            //'created_time',
                            //'modified_user_id',
                            //'modified_time',
                            //'ap_invoice_id',
                            //'items_received',
                            //'received_by',
                            //'paid',
                            //'ap_invoice_no',
                            //'bank_id',
                            //'request_id',
                            //'request_no',

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
