<?php

/* @var $this yii\web\View */
/* @var $model app\models\billingPmtDet */

$this->title = 'Update Billing Pmt Det: ' . $model->bill_pmt_id;
$this->params['breadcrumbs'][] = ['label' => 'Billing Pmt Dets', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->bill_pmt_id, 'url' => ['view', 'bill_pmt_id' => $model->bill_pmt_id, 'seq' => $model->seq]];
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