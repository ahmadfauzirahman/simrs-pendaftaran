<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ItemTypeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Item Types';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-md-12">
                            <?= Html::a('Create Item Type', ['create'], ['class' => 'btn btn-success']) ?>
                        </div>
                    </div>


                    <?php Pjax::begin(); ?>
                    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],

                            'item_type_id',
                            'type_name',
                            'inventory',
                            'costing_method',
                            'created_user_id',
                            //'created_time',
                            //'modified_user_id',
                            //'modified_time',
                            //'sales_gl_acc_id',
                            //'sales_disc_gl_acc_id',
                            //'inventory_gl_acc_id',
                            //'cogs_gl_acc_id',
                            //'cat',
                            //'sales_ret_gl_acc_id',
                            //'costing_journal',
                            //'item_category',
                            //'item_category_en',

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
