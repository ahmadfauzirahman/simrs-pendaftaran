<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ReferenceTypeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Reference Types';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-md-12">
                            <?= Html::a('Create Reference Type', ['create'], ['class' => 'btn btn-success']) ?>
                        </div>
                    </div>


                    <?php Pjax::begin(); ?>
                    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],

                            'ref_type_id',
                            'type_name',
                            'bpjs_refer_type',
                            'created_user_id',
                            'created_time',
                            //'modified_user_id',
                            //'modified_time',
                            //'source',
                            //'bpjs_online',
                            //'address_line',
                            //'code_ref',
                            //'city_id',
                            //'district_id',
                            //'subdistrict_id',
                            //'province_id',
                            //'village_id',
                            //'pic_name',
                            //'handphone',
                            //'ref_type_group',
                            //'sub_district_id',

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
