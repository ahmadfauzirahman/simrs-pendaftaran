<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ArInv */

$this->title = $model->invoice_id;
$this->params['breadcrumbs'][] = ['label' => 'Ar Invs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <p>
                        <?= Html::a('Update', ['update', 'id' => $model->invoice_id], ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('Delete', ['delete', 'id' => $model->invoice_id], [
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
                            'invoice_id',
                            'invoice_no',
                            'invoice_date',
                            'gl_year',
                            'gl_period',
                            'customer_id',
                            'warehouse_id',
                            'salesman_id',
                            'currency_id',
                            'location_id',
                            'exchange_rate',
                            'taxation_rate',
                            'disc_days',
                            'disc_pc',
                            'net_days',
                            'cod',
                            'items_net_amount',
                            'invoice_disc_pc',
                            'invoice_disc_amount',
                            'invoice_amount',
                            'writeoff_amount',
                            'owing_amount',
                            'payment_discount',
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
                            'posted',
                            'printed',
                            'purchase_order_no',
                            'shipto_name',
                            'shipto_address:ntext',
                            'return_invoice',
                            'return_ref_invoice_id',
                            'return_ref_invoice_no',
                            'authorized_user_id',
                            'authorized_reason',
                            'notes:ntext',
                            'pic_pay_id',
                            'created_user_id',
                            'created_time',
                            'modified_user_id',
                            'modified_time',
                            'invoice_type',
                            'dp_amount',
                            'invoice_content',
                            'tax_invoice_no',
                            'tax_invoice_date',
                            'invoice_send_date',
                            'invoice_receive_date',
                            'invoice_return_date',
                            'ship_from',
                            'ship_until',
                            'staff_id',
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