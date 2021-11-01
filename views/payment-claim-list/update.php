<?php

/* @var $this yii\web\View */
/* @var $model app\models\PaymentClaimList */

$this->title = 'Update Payment Claim List: ' . $model->payment_id;
$this->params['breadcrumbs'][] = ['label' => 'Payment Claim Lists', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->payment_id, 'url' => ['view', 'payment_id' => $model->payment_id, 'seq' => $model->seq]];
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