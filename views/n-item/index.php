<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\NItemSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'N Items';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-md-12">
                            <?= Html::a('Create N Item', ['create'], ['class' => 'btn btn-success']) ?>
                        </div>
                    </div>


                    <?php Pjax::begin(); ?>
                    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],

                            'item_id',
                            'item_no',
                            'item_name',
                            'item_type_id',
                            'item_group_id',
                            //'uom_id',
                            //'sales_item',
                            //'purchase_item',
                            //'wip_item',
                            //'minimum_qty',
                            //'safety_level',
                            //'economic_order_qty',
                            //'unit_weight',
                            //'qty_per_batch',
                            //'material_per_batch',
                            //'disabled',
                            //'backorderable',
                            //'unit_price',
                            //'unit_discount',
                            //'fixed_cost',
                            //'wgt_avg_cost',
                            //'col_staff_enabled',
                            //'sales_gl_acc_id',
                            //'sales_disc_gl_acc_id',
                            //'inventory_gl_acc_id',
                            //'cogs_gl_acc_id',
                            //'created_user_id',
                            //'created_time',
                            //'modified_user_id',
                            //'modified_time',
                            //'notes:ntext',
                            //'lab_exam_mtd:ntext',
                            //'sales_tax1_id',
                            //'sales_tax2_id',
                            //'sales_tax3_id',
                            //'purchase_tax1_id',
                            //'purchase_tax2_id',
                            //'purchase_tax3_id',
                            //'price_define',
                            //'markup_pc',
                            //'price_value',
                            //'sales_ret_gl_acc_id',
                            //'pharm_formula_editable',
                            //'item_category',
                            //'laboratory',
                            //'dist_sales',
                            //'enable_auto_charge',
                            //'ac_occurence',
                            //'ac_limit_app',
                            //'ac_limit_num_of_app',
                            //'ac_evaluate_time',
                            //'ac_round_to',
                            //'ac_round_offset',
                            //'therapy',
                            //'vendor_id',
                            //'last_purchase_price',
                            //'last_purchase_disc_pc',
                            //'manufacturer',
                            //'formula',
                            //'warna',
                            //'sediaan',
                            //'gol_ims',
                            //'subgol_ims',
                            //'kel_therapi',
                            //'carapakai',
                            //'kategori1',
                            //'kategori2',
                            //'kategori3',
                            //'kategori4',
                            //'kategori5',
                            //'photo',

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
