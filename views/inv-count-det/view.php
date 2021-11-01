<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\InvCountDet */

$this->title = $model->count_id;
$this->params['breadcrumbs'][] = ['label' => 'Inv Count Dets', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <p>
                        <?= Html::a('Update', ['update', 'count_id' => $model->count_id, 'seq' => $model->seq], ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('Delete', ['delete', 'count_id' => $model->count_id, 'seq' => $model->seq], [
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
                            'count_id',
                            'seq',
                            'item_id',
                            'physical_qty',
                            'system_qty',
                            'uom',
                            'uom_conversion',
                            'location',
                            'location_row',
                            'location_col',
                            'remark',
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