<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\CustomerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Customers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-md-12">
                            <?= Html::a('Create Customer', ['create'], ['class' => 'btn btn-success']) ?>
                        </div>
                    </div>


                    <?php Pjax::begin(); ?>
                    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],

                            'customer_id',
                            'customer_no',
                            'customer_name',
                            'address_line1',
                            'address_line2',
                            //'city',
                            //'state_prov',
                            //'zipcode',
                            //'country',
                            //'contact',
                            //'phone',
                            //'fax',
                            //'email:email',
                            //'webpage',
                            //'cus_type_id',
                            //'cus_group_id',
                            //'tax1_id',
                            //'tax2_id',
                            //'tax1_exemption_no',
                            //'tax2_exemption_no',
                            //'tax_no',
                            //'currency_id',
                            //'credit_limit_enabled',
                            //'credit_limit_amount',
                            //'credit_limit_restriction',
                            //'disc_pc',
                            //'disc_days',
                            //'net_days',
                            //'cod',
                            //'disabled',
                            //'print_message',
                            //'allow_backorders',
                            //'salesman_id',
                            //'shipment_contact_seq',
                            //'message_line1',
                            //'message_line2',
                            //'notes:ntext',
                            //'created_user_id',
                            //'created_time',
                            //'modified_user_id',
                            //'modified_time',
                            //'carrier_id',

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
