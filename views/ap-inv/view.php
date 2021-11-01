<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ApInv */

$this->title = $model->invoice_id;
$this->params['breadcrumbs'][] = ['label' => 'Ap Invs', 'url' => ['index']];
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
                            'vendor_id',
                            'gl_year',
                            'gl_period',
                            'currency_id',
                            'location_id',
                            'exchange_rate',
                            'taxation_rate',
                            'items_net_amount',
                            'invoice_disc_pc',
                            'invoice_disc_amount',
                            'invoice_amount',
                            'owing_amount',
                            'payment_discount',
                            'cod',
                            'disc_pc',
                            'disc_days',
                            'net_days',
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
                            'orders_no',
                            'receipts_no',
                            'return_ref_invoice_id',
                            'return_ref_invoice_no',
                            'detail_items',
                            'notes:ntext',
                            'created_user_id',
                            'created_time',
                            'modified_user_id',
                            'modified_time',
                            'invoice_type',
                            'dp_amount',
                            'tax_invoice_no',
                            'tax_invoice_date',
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