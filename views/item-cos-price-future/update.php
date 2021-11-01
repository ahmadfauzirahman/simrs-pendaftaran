<?php

/* @var $this yii\web\View */
/* @var $model app\models\ItemCosPriceFuture */

$this->title = 'Update Item Cos Price Future: ' . $model->update_method;
$this->params['breadcrumbs'][] = ['label' => 'Item Cos Price Futures', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->update_method, 'url' => ['view', 'update_method' => $model->update_method, 'eff_date' => $model->eff_date, 'item_id' => $model->item_id, 'cos_id' => $model->cos_id]];
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