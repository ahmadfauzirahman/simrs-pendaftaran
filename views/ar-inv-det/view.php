<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ArInvDet */

$this->title = $model->invoice_id;
$this->params['breadcrumbs'][] = ['label' => 'Ar Inv Dets', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <p>
                        <?= Html::a('Update', ['update', 'invoice_id' => $model->invoice_id, 'seq' => $model->seq], ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('Delete', ['delete', 'invoice_id' => $model->invoice_id, 'seq' => $model->seq], [
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
                            'seq',
                            'item_id',
                            'quantity',
                            'uom',
                            'uom_conversion',
                            'unit_price',
                            'disc_pc',
                            'disc_amount',
                            'add_discount',
                            'remark',
                            'ship_from',
                            'ship_until',
                            'staff_id',
                            'reg_id',
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