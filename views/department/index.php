<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\DepartmentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Departments';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-md-12">
                            <?= Html::a('Create Department', ['create'], ['class' => 'btn btn-success']) ?>
                        </div>
                    </div>


                    <?php Pjax::begin(); ?>
                    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],

                            'dept_id',
                            'dept_name',
                            'person_in_charge',
                            'created_user_id',
                            'created_time',
                            //'modified_user_id',
                            //'modified_time',
                            //'unit_caption',
                            //'sub_unit_caption',
                            //'small_icon',
                            //'large_icon',
                            //'description:ntext',
                            //'tab_charges',
                            //'tab_auto_charges',
                            //'tab_anamnesis',
                            //'tab_physical_exam',
                            //'tab_other_exam',
                            //'tab_diagnosis',
                            //'tab_therapy',
                            //'tab_procedure',
                            //'tab_prognosis',
                            //'tab_alergy',
                            //'tab_degenerative',
                            //'tab_chronic',
                            //'tab_diet',
                            //'tab_notes',
                            //'gl_jtype_id',
                            //'col_staff',
                            //'refer_dept_code',

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
