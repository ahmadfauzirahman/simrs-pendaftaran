<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ScrtUserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Scrt Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-md-12">
                            <?= Html::a('Create Scrt User', ['create'], ['class' => 'btn btn-success']) ?>
                        </div>
                    </div>


                    <?php Pjax::begin(); ?>
                    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],

                            'user_id',
                            'user_name',
                            'password',
                            'full_name',
                            'disable_change_pwd',
                            //'change_pwd_on_login',
                            //'access_expiry_option',
                            //'access_expiry_date',
                            //'notes:ntext',
                            //'job_title',
                            //'department',
                            //'group_id',
                            //'policy_id',
                            //'active',
                            //'built_in',
                            //'q_server_id',
                            //'login_show_alerts',
                            //'email:email',
                            //'opening_module_id',
                            //'user_signature',
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
