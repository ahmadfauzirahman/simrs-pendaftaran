<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ApInvSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ap Invs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-md-12">
                            <?= Html::a('Create Ap Inv', ['create'], ['class' => 'btn btn-success']) ?>
                        </div>
                    </div>


                    <?php Pjax::begin(); ?>
                    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],

                            'invoice_id',
                            'invoice_no',
                            'invoice_date',
                            'vendor_id',
                            'gl_year',
                            //'gl_period',
                            //'currency_id',
                            //'location_id',
                            //'exchange_rate',
                            //'taxation_rate',
                            //'items_net_amount',
                            //'invoice_disc_pc',
                            //'invoice_disc_amount',
                            //'invoice_amount',
                            //'owing_amount',
                            //'payment_discount',
                            //'cod',
                            //'disc_pc',
                            //'disc_days',
                            //'net_days',
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
                            //'posted',
                            //'orders_no',
                            //'receipts_no',
                            //'return_ref_invoice_id',
                            //'return_ref_invoice_no',
                            //'detail_items',
                            //'notes:ntext',
                            //'created_user_id',
                            //'created_time',
                            //'modified_user_id',
                            //'modified_time',
                            //'invoice_type',
                            //'dp_amount',
                            //'tax_invoice_no',
                            //'tax_invoice_date',

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
