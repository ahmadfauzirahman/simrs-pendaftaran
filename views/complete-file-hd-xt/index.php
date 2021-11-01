<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\CompleteFileHdXtSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Complete File Hd Xts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-md-12">
                            <?= Html::a('Create Complete File Hd Xt', ['create'], ['class' => 'btn btn-success']) ?>
                        </div>
                    </div>


                    <?php Pjax::begin(); ?>
                    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],

                            'reg_id',
                            'staff_id',
                            'date_receive_file',
                            'date_start_hd',
                            'h_1',
                            //'h_2',
                            //'h_3',
                            //'h_4',
                            //'h_5',
                            //'h_6',
                            //'h_7',
                            //'h_8',
                            //'h_9',
                            //'h_10',
                            //'h_11',
                            //'h_12',
                            //'h_cp',
                            //'h_date_cp',
                            //'created_user_id',
                            //'created_time',

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
