<?php

/* @var $this yii\web\View */
/* @var $model app\models\BillingPmtArDet */

$this->title = 'Update Billing Pmt Ar Det: ' . $model->process_id;
$this->params['breadcrumbs'][] = ['label' => 'Billing Pmt Ar Dets', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->process_id, 'url' => ['view', 'process_id' => $model->process_id, 'invoice_id' => $model->invoice_id]];
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