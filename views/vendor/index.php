<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\VendorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Vendors';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-md-12">
                            <?= Html::a('Create Vendor', ['create'], ['class' => 'btn btn-success']) ?>
                        </div>
                    </div>


                    <?php Pjax::begin(); ?>
                    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],

                            'vendor_id',
                            'vendor_no',
                            'vendor_name',
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
                            //'ven_type_id',
                            //'ven_group_id',
                            //'tax1_id',
                            //'tax2_id',
                            //'tax_no',
                            //'currency_id',
                            //'cod',
                            //'net_days',
                            //'disc_days',
                            //'disc_pc',
                            //'disabled',
                            //'message_line1',
                            //'message_line2',
                            //'print_message',
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
