<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ScrtPolicySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Scrt Policies';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-md-12">
                            <?= Html::a('Create Scrt Policy', ['create'], ['class' => 'btn btn-success']) ?>
                        </div>
                    </div>


                    <?php Pjax::begin(); ?>
                    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],

                            'policy_id',
                            'policy_name',
                            'notes:ntext',
                            'login_option',
                            'full_access_module',
                            //'reg_menu_cap',
                            //'order_menu_cap',
                            //'billing_menu_cap',
                            //'pos_menu_cap',
                            //'allow_access_self_amount',
                            //'allow_access_pay_by_amount',
                            //'oe_allow_change_price',
                            //'oe_allow_change_disc',
                            //'oe_show_price_column',
                            //'oe_show_disc_column',
                            //'oe_show_tax_column',
                            //'oe_show_total_amount_column',
                            //'oe_show_self_amount_column',
                            //'oe_show_pay_by_amount_column',
                            //'oe_allow_change_self_amount',
                            //'oe_allow_change_payby_amount',
                            //'oe_allow_change_med_status',
                            //'oe_allow_change_uom',
                            //'exam_tab',
                            //'built_in',
                            //'custom_form_id',
                            //'oe_allow_folio_correction',
                            //'oe_allow_change_pay_by',
                            //'oe_allow_change_reg_status',
                            //'created_user_id',
                            //'created_time',
                            //'modified_user_id',
                            //'modified_time',

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
