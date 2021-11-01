<?php

/* @var $this yii\web\View */
/* @var $model app\models\WarehouseItem */

$this->title = 'Update Warehouse Item: ' . $model->warehouse_id;
$this->params['breadcrumbs'][] = ['label' => 'Warehouse Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->warehouse_id, 'url' => ['view', 'warehouse_id' => $model->warehouse_id, 'item_id' => $model->item_id]];
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