<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\NMonthlyCost */

$this->title = $model->inv_date;
$this->params['breadcrumbs'][] = ['label' => 'N Monthly Costs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <p>
                        <?= Html::a('Update', ['update', 'inv_date' => $model->inv_date, 'item_id' => $model->item_id], ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('Delete', ['delete', 'inv_date' => $model->inv_date, 'item_id' => $model->item_id], [
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
                            'inv_date',
                            'item_id',
                            'wgt_avg_cost',
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