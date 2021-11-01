<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\RegOpExtSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Reg Op Exts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-md-12">
                            <?= Html::a('Create Reg Op Ext', ['create'], ['class' => 'btn btn-success']) ?>
                        </div>
                    </div>


                    <?php Pjax::begin(); ?>
                    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],

                            'reg_op_id',
                            'reg_id',
                            'reg_op_no',
                            'date_op',
                            'diag_medis_id',
                            //'tind_medis_id',
                            //'ot_1',
                            //'ot_2',
                            //'ot_3',
                            //'ot_4',
                            //'ot_5',
                            //'ot_6',
                            //'a_1',
                            //'a_2',
                            //'a_3',
                            //'a_4',
                            //'g_1',
                            //'g_2',
                            //'g_3',
                            //'g_4',
                            //'g_5',
                            //'am_1',
                            //'am_2',
                            //'am_3',
                            //'am_4',
                            //'am_5',
                            //'am_6',
                            //'am_7',
                            //'am_8',
                            //'time_op1',
                            //'time_op2',
                            //'time_op3',
                            //'staff_kons',
                            //'staff_op',
                            //'staff_anes',
                            //'staff_panes',
                            //'staff_anak',
                            //'asisten_id',
                            //'instrument_id',
                            //'on_loop',
                            //'sa_1',
                            //'sa_2',
                            //'ods_1',
                            //'ods_2',
                            //'ods_3',
                            //'pj_id',
                            //'rr_id',
                            //'pa',
                            //'notes:ntext',
                            //'spes_id',
                            //'created_user_id',
                            //'created_time',
                            //'modified_user_id',
                            //'modified_time',
                            //'posted',

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
