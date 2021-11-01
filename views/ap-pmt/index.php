<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ApPmtSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ap Pmts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-md-12">
                            <?= Html::a('Create Ap Pmt', ['create'], ['class' => 'btn btn-success']) ?>
                        </div>
                    </div>


                    <?php Pjax::begin(); ?>
                    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],

                            'payment_id',
                            'payment_no',
                            'payment_date',
                            'gl_year',
                            'gl_period',
                            //'vendor_id',
                            //'bank_id',
                            //'check_no',
                            //'currency_id',
                            //'exchange_rate',
                            //'payment_amount',
                            //'check_amount',
                            //'rounding_amount',
                            //'due_date',
                            //'posted',
                            //'reconciled',
                            //'reconciled_time',
                            //'void_time',
                            //'void',
                            //'deposit',
                            //'deposit_invoice',
                            //'deposit_payment',
                            //'dp_amount',
                            //'post_dated',
                            //'created_user_id',
                            //'created_time',
                            //'modified_user_id',
                            //'modified_time',
                            //'description',
                            //'notes:ntext',
                            //'rounding_gl_account_id',
                            //'printed_id',

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
