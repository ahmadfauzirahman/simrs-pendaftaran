<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\McuIndetXtSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Mcu Indet Xts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-md-12">
                            <?= Html::a('Create Mcu Indet Xt', ['create'], ['class' => 'btn btn-success']) ?>
                        </div>
                    </div>


                    <?php Pjax::begin(); ?>
                    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],

                            'mcu_id',
                            'seq',
                            'posted',
                            'cd2',
                            'cd3',
                            //'cd5',
                            //'e1',
                            //'e2',
                            //'e3',
                            //'e4',
                            //'e5',
                            //'e6',
                            //'e7',
                            //'e8',
                            //'e9',
                            //'e10',
                            //'e11',
                            //'e12',
                            //'e13',
                            //'e14',
                            //'e15',
                            //'e16',
                            //'e17',
                            //'e18',
                            //'e19',
                            //'e20',
                            //'e21',
                            //'e22',
                            //'e23',
                            //'e24',
                            //'e25',
                            //'e26',
                            //'e27',
                            //'e28',
                            //'e29',
                            //'e30',
                            //'e31',
                            //'e32',
                            //'e33',
                            //'e34',
                            //'e35',
                            //'e36',
                            //'e37',
                            //'e38',
                            //'e39',
                            //'e40',
                            //'e41',
                            //'ep1',
                            //'ep2',
                            //'ep3',
                            //'ep4',
                            //'ep5',
                            //'ep6',
                            //'ep7',
                            //'ep8',
                            //'ep9',
                            //'ep10',
                            //'ep11',
                            //'ep12',
                            //'ep13',
                            //'ep14',
                            //'ep15',
                            //'ep16',
                            //'ep17',
                            //'ep18',
                            //'ep19',
                            //'ep20',
                            //'ep21',
                            //'ep22',
                            //'ep23',
                            //'ep24',
                            //'ep25',
                            //'ep26',
                            //'ep27',
                            //'ep28',
                            //'ep29',
                            //'ep30',
                            //'ep31',
                            //'ep32',
                            //'ep33',
                            //'ep34',
                            //'ep35',
                            //'ep36',
                            //'ep37',
                            //'ep38',
                            //'ep39',
                            //'ep40',
                            //'ep41',
                            //'pe1',
                            //'pe2',
                            //'pe3a',
                            //'pe3b',
                            //'pe4',
                            //'pe5',
                            //'pe6',
                            //'pe7',
                            //'pe8',
                            //'pe9',
                            //'pe10',
                            //'pe11',
                            //'pe12',
                            //'pe13',
                            //'pe14',
                            //'pe15',
                            //'pe16',
                            //'pe17',
                            //'pe18',
                            //'pe19',
                            //'pe20',
                            //'pe21',
                            //'pe22',
                            //'pe23',
                            //'pe24',
                            //'pe25',
                            //'pe26',
                            //'pe27',
                            //'pe28',
                            //'pe29',
                            //'pe30',
                            //'pe31',
                            //'pe32',
                            //'pe33',
                            //'pe34',
                            //'pe35',
                            //'pe36',
                            //'ape1',
                            //'ape2',
                            //'ape3',
                            //'m1',
                            //'mkesim',
                            //'msaran',
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
