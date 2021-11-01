<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Sorder */

$this->title = $model->order_id;
$this->params['breadcrumbs'][] = ['label' => 'Sorders', 'url' => ['index']];
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
                            'customer_id',
                            'req_shipped_date',
                            'purchase_order_no',
                            'carrier_id',
                            'salesman_id',
                            'order_status',
                            'printed',
                            'currency_id',
                            'items_net_amount',
                            'order_amount',
                            'tax1_id',
                            'tax2_id',
                            'tax1_rate',
                            'tax2_rate',
                            'tax1_amount',
                            'tax2_amount',
                            'taxable_tax1_id',
                            'taxable_tax2_id',
                            'taxable_tax3_id',
                            'taxable_amount1',
                            'taxable_amount2',
                            'taxable_amount3',
                            'num_of_shipments',
                            'order_disc_pc',
                            'order_disc_amount',
                            'shipto_name',
                            'shipto_address:ntext',
                            'notes:ntext',
                            'authorized_user_id',
                            'authorized_reason',
                            'created_user_id',
                            'created_time',
                            'modified_user_id',
                            'modified_time',
                            'disc_days',
                            'net_days',
                            'disc_pc',
                            'cod',
                            'dp_amount',
                            'dp_invoiced',
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