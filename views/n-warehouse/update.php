<?php

/* @var $this yii\web\View */
/* @var $model app\models\NWarehouse */

$this->title = 'Update N Warehouse: ' . $model->warehouse_id;
$this->params['breadcrumbs'][] = ['label' => 'N Warehouses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->warehouse_id, 'url' => ['view', 'id' => $model->warehouse_id]];
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