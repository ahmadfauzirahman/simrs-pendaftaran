<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ScrtModSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Scrt Mods';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-md-12">
                            <?= Html::a('Create Scrt Mod', ['create'], ['class' => 'btn btn-success']) ?>
                        </div>
                    </div>


                    <?php Pjax::begin(); ?>
                    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],

                            'mod_id',
                            'mod_name',
                            'standard_actions',
                            'add_actions',
                            'action_name',
                            //'form_name',
                            //'parent_mod_id',
                            //'order_seq',
                            //'notes:ntext',
                            //'before_insert_url:url',
                            //'after_insert_url:url',
                            //'before_edit_url:url',
                            //'after_edit_url:url',
                            //'before_save_url:url',
                            //'after_save_url:url',
                            //'before_cancel_url:url',
                            //'after_cancel_url:url',
                            //'before_delete_url:url',
                            //'after_delete_url:url',
                            //'before_copy_url:url',
                            //'after_copy_url:url',
                            //'before_post_url:url',
                            //'after_post_url:url',
                            //'before_export_url:url',
                            //'after_export_url:url',
                            //'before_print_url:url',
                            //'after_print_url:url',
                            //'before_refresh_url:url',
                            //'after_refresh_url:url',
                            //'on_call_url:url',
                            //'bi_x',
                            //'bi_y',
                            //'ai_x',
                            //'ai_y',
                            //'be_x',
                            //'be_y',
                            //'ae_x',
                            //'ae_y',
                            //'bs_x',
                            //'bs_y',
                            //'as_x',
                            //'as_y',
                            //'bc_x',
                            //'bc_y',
                            //'ac_x',
                            //'ac_y',
                            //'bd_x',
                            //'bd_y',
                            //'ad_x',
                            //'ad_y',
                            //'bo_x',
                            //'bo_y',
                            //'ao_x',
                            //'ao_y',
                            //'bp_x',
                            //'bp_y',
                            //'ap_x',
                            //'ap_y',
                            //'bx_x',
                            //'bx_y',
                            //'ax_x',
                            //'ax_y',
                            //'bt_x',
                            //'bt_y',
                            //'at_x',
                            //'at_y',
                            //'br_x',
                            //'br_y',
                            //'ar_x',
                            //'ar_y',
                            //'oc_x',
                            //'oc_y',

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
