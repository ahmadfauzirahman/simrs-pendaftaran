<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\SalesSetup */

$this->title = $model->company_id;
$this->params['breadcrumbs'][] = ['label' => 'Sales Setups', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <p>
                        <?= Html::a('Update', ['update', 'id' => $model->company_id], ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('Delete', ['delete', 'id' => $model->company_id], [
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
                            'company_id',
                            'shipment_warehouse_id',
                            'shipment_carrier_id',
                            'qty_ordered_restriction',
                            'qty_shipped_restriction',
                            'default_show_order',
                            'default_show_shipment',
                            'sorder_rpt_cat_id',
                            'shipment_rpt_cat_id',
                            'correction_needs_supervisor',
                            'created_user_id',
                            'created_time',
                            'modified_user_id',
                            'modified_time',
                            'pos_usage:ntext',
                            'pos_usage_remark:ntext',
                            'dtd:ntext',
                            'non_dtd:ntext',
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