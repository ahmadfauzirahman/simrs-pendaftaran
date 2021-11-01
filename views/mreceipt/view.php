<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Mreceipt */

$this->title = $model->receipt_id;
$this->params['breadcrumbs'][] = ['label' => 'Mreceipts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <p>
                        <?= Html::a('Update', ['update', 'id' => $model->receipt_id], ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('Delete', ['delete', 'id' => $model->receipt_id], [
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
                            'receipt_id',
                            'receipt_no',
                            'gl_year',
                            'gl_period',
                            'receipt_date',
                            'order_id',
                            'order_no',
                            'item_id',
                            'warehouse_id',
                            'qty_received',
                            'posted',
                            'created_user_id',
                            'created_time',
                            'modified_user_id',
                            'modified_time',
                            'uom',
                            'printed',
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