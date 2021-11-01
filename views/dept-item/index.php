<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\DeptItemSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Dept Items';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-md-12">
                            <?= Html::a('Create Dept Item', ['create'], ['class' => 'btn btn-success']) ?>
                        </div>
                    </div>


                    <?php Pjax::begin(); ?>
                    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],

                            'id',
                            'dept_id',
                            'unit_id',
                            'sub_unit_id',
                            'item_id',
                            //'description',
                            //'price',
                            //'discount',
                            //'compulsory',
                            //'compul_qty',
                            //'compul_event',
                            //'auto_charge',
                            //'auto_charge_type',
                            //'created_user_id',
                            //'created_time',
                            //'modified_user_id',
                            //'modified_time',
                            //'sales_disc_gl_acc_id',
                            //'sales_ret_gl_acc_id',
                            //'inventory_gl_acc_id',
                            //'sales_gl_acc_id',
                            //'cogs_gl_acc_id',

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
