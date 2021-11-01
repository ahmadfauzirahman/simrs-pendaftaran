<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\EmrPatientNotesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Emr Patient Notes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-md-12">
                            <?= Html::a('Create Emr Patient Notes', ['create'], ['class' => 'btn btn-success']) ?>
                        </div>
                    </div>


                    <?php Pjax::begin(); ?>
                    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],

                            'patient_id',
                            'seq',
                            'patient_notes_id',
                            'notes_status',
                            'notes_description',
                            //'notes_created_time',
                            //'notes_created_by',
                            //'notes_modified_time',
                            //'notes_modified_by',
                            //'notes_cancelled_time',
                            //'notes_cancelled_by',
                            //'notes_cancellation_reason',
                            //'notes_cancelled_signature',
                            //'notes_verified_time',
                            //'notes_verified_by',
                            //'notes_verified_signature',
                            //'notes_cosigned_time',
                            //'notes_cosigned_by',
                            //'notes_cosigned_signature',
                            //'notes_cosigned2_time',
                            //'notes_cosigned2_by',
                            //'notes_cosigned2_signature',
                            //'notes_cosigned3_time',
                            //'notes_cosigned3_by',
                            //'notes_cosigned3_signature',
                            //'notes_cosigned4_time',
                            //'notes_cosigned4_by',
                            //'notes_cosigned4_signature',
                            //'notes_cosigned5_time',
                            //'notes_cosigned5_by',
                            //'notes_cosigned5_signature',

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
