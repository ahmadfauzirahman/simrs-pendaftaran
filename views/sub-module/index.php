<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\SubModuleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sub Modules';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-md-12">
                            <?= Html::a('Create Sub Module', ['create'], ['class' => 'btn btn-success']) ?>
                        </div>
                    </div>


                    <?php Pjax::begin(); ?>
                    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],

                            'sub_mod_id',
                            'sub_mod_name',
                            'interface_id',
                            'image',
                            'dept_id',
                            //'unit_id',
                            //'sub_unit_id',
                            //'mod_id',
                            //'barcode_enabled',
                            //'payment_type',
                            //'before_insert_url:url',
                            //'after_insert_url:url',
                            //'before_edit_url:url',
                            //'after_edit_url:url',
                            //'before_cancel_url:url',
                            //'after_cancel_url:url',
                            //'bi_x',
                            //'bi_y',
                            //'ai_x',
                            //'ai_y',
                            //'be_x',
                            //'be_y',
                            //'ae_x',
                            //'ae_y',
                            //'bc_x',
                            //'bc_y',
                            //'ac_x',
                            //'ac_y',

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
