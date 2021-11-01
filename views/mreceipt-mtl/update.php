<?php

/* @var $this yii\web\View */
/* @var $model app\models\MreceiptMtl */

$this->title = 'Update Mreceipt Mtl: ' . $model->receipt_id;
$this->params['breadcrumbs'][] = ['label' => 'Mreceipt Mtls', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->receipt_id, 'url' => ['view', 'receipt_id' => $model->receipt_id, 'seq' => $model->seq]];
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