<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\MaintActSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Maint Acts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-md-12">
                            <?= Html::a('Create Maint Act', ['create'], ['class' => 'btn btn-success']) ?>
                        </div>
                    </div>


                    <?php Pjax::begin(); ?>
                    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],

                            'job_id',
                            'job_no',
                            'department_id',
                            'category_id',
                            'request_time',
                            //'location_id',
                            //'location_mark',
                            //'asset_id',
                            //'contact_name',
                            //'severity_id',
                            //'request_detail:ntext',
                            //'requested_by',
                            //'respond_time',
                            //'responded_by',
                            //'estimated_due_date',
                            //'result_id',
                            //'result_detail:ntext',
                            //'crew_member',
                            //'request_photo',
                            //'result_photo',
                            //'posted_by',
                            //'posted_time',
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
