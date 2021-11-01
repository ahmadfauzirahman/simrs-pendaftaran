<?php

/* @var $this yii\web\View */
/* @var $model app\models\BillingPmt */

$this->title = 'Update Billing Pmt: ' . $model->bill_pmt_id;
$this->params['breadcrumbs'][] = ['label' => 'Billing Pmts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->bill_pmt_id, 'url' => ['view', 'id' => $model->bill_pmt_id]];
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