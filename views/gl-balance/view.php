<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\GlBalance */

$this->title = $model->account_id;
$this->params['breadcrumbs'][] = ['label' => 'Gl Balances', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <p>
                        <?= Html::a('Update', ['update', 'account_id' => $model->account_id, 'location_id' => $model->location_id, 'gl_year' => $model->gl_year], ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('Delete', ['delete', 'account_id' => $model->account_id, 'location_id' => $model->location_id, 'gl_year' => $model->gl_year], [
                            'class' => 'btn btn-danger',
                            'data' => [
                                'confirm' => 'Are you sure you want to delete this item?',
                                'method' => 'post',
                            ],
                        ]) ?>
                    </p>
                    <?= DetailView::widget([
                        'model' => $model,
                        'attributes' => [
                            'account_id',
                            'location_id',
                            'gl_year',
                            'opening_bal',
                            'period1',
                            'period2',
                            'period3',
                            'period4',
                            'period5',
                            'period6',
                            'period7',
                            'period8',
                            'period9',
                            'period10',
                            'period11',
                            'period12',
                        ],
                    ]) ?>
                </div>
                <!--.col-md-12-->
            </div>
            <!--.row-->
        </div>
        <!--.card-body-->
    </div>
    <!--.card-->
</div>