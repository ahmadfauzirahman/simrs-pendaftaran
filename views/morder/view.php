<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Morder */

$this->title = $model->order_id;
$this->params['breadcrumbs'][] = ['label' => 'Morders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <p>
                        <?= Html::a('Update', ['update', 'id' => $model->order_id], ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('Delete', ['delete', 'id' => $model->order_id], [
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
                            'order_id',
                            'order_no',
                            'order_date',
                            'req_receipt_date',
                            'order_status',
                            'printed',
                            'item_id',
                            'qty_ordered',
                            'qty_received',
                            'notes:ntext',
                            'num_of_receipts',
                            'created_user_id',
                            'created_time',
                            'modified_user_id',
                            'modified_time',
                            'uom',
                            'uom_conversion',
                            'warehouse_id',
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