<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\AssetSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Assets';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-md-12">
                            <?= Html::a('Create Asset', ['create'], ['class' => 'btn btn-success']) ?>
                        </div>
                    </div>


                    <?php Pjax::begin(); ?>
                    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],

                            'asset_id',
                            'asset_no',
                            'asset_name',
                            'tag_id',
                            'asset_type_id',
                            //'tax_valuation',
                            //'acquisition_date',
                            //'usage_date',
                            //'disposal_date',
                            //'selling_date',
                            //'life_time:datetime',
                            //'life_time_unit',
                            //'asset_gl_acc_id',
                            //'dep_gl_acc_id',
                            //'accdep_gl_acc_id',
                            //'disposal_gl_acc_id',
                            //'sales_gl_acc_id',
                            //'model',
                            //'model_name',
                            //'dep_method',
                            //'rate',
                            //'asset_status',
                            //'asset_value',
                            //'dep_value',
                            //'salvage_value',
                            //'num_of_jvs',
                            //'num_of_posted_jvs',
                            //'location_id',
                            //'asset_group_id',
                            //'dept_id',
                            //'manufacturer',
                            //'mfg_model',
                            //'mfg_date',
                            //'serial_no',
                            //'color',
                            //'marking',
                            //'warranty_date',
                            //'last_mnt_date',
                            //'mnt_period',
                            //'picture',
                            //'remark',
                            //'policy_no',
                            //'ins_date',
                            //'ins_company',
                            //'ins_address',
                            //'ins_city',
                            //'ins_term',
                            //'ins_value',
                            //'ins_validity_from',
                            //'ins_validity_to',
                            //'user_name',
                            //'user_title',
                            //'person_in_charge',
                            //'maintenanced_by',
                            //'notes:ntext',
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
