<?php

/* @var $this yii\web\View */
/* @var $model app\models\ShipmentDet */

$this->title = 'Update Shipment Det: ' . $model->shipment_id;
$this->params['breadcrumbs'][] = ['label' => 'Shipment Dets', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->shipment_id, 'url' => ['view', 'shipment_id' => $model->shipment_id, 'seq' => $model->seq]];
$this->params['breadcrumbs'][] = 'Update';
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <?=$this->render('_form', [
                        'model' => $model
                    ]) ?>
                </div>
            </div>
        </div>
        <!--.card-body-->
    </div>
    <!--.card-->
</div>