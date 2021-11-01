<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\RegSetupSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Reg Setups';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-md-12">
                            <?= Html::a('Create Reg Setup', ['create'], ['class' => 'btn btn-success']) ?>
                        </div>
                    </div>


                    <?php Pjax::begin(); ?>
                    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],

                            'company_id',
                            'reg_rpt_cat_id',
                            'order_rpt_cat_id',
                            'pos_rpt_cat_id',
                            'billing_pmt_rpt_cat_id',
                            //'nurse_care_rpt_cat_id',
                            //'self_payby_id',
                            //'bpjs_online_payby_id',
                            //'created_user_id',
                            //'created_time',
                            //'modified_user_id',
                            //'modified_time',
                            //'folio_gl_posting_type',
                            //'folio_gl_posting_date',
                            //'folio_gl_posting_period',
                            //'folio_gl_posting_year',
                            //'folio_gl_journal_id_active',
                            //'default_show_patient',
                            //'rof_rpt_cat_id',
                            //'sustatus_allowed_reg',
                            //'reregister_restriction',
                            //'auto_post_folio_refer',
                            //'release_cancelled_rsvp',
                            //'web_rsvp_url:url',

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
