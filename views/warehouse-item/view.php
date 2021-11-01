<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\WarehouseItem */

$this->title = $model->warehouse_id;
$this->params['breadcrumbs'][] = ['label' => 'Warehouse Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <p>
                        <?= Html::a('Update', ['update', 'warehouse_id' => $model->warehouse_id, 'item_id' => $model->item_id], ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('Delete', ['delete', 'warehouse_id' => $model->warehouse_id, 'item_id' => $model->item_id], [
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
                            'warehouse_id',
                            'item_id',
                            'minimum_qty',
                            'safety_level',
                            'economic_order_qty',
                            'location',
                            'location_row',
                            'location_col',
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