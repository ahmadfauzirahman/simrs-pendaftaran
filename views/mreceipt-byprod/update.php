<?php

/* @var $this yii\web\View */
/* @var $model app\models\MreceiptByprod */

$this->title = 'Update Mreceipt Byprod: ' . $model->receipt_id;
$this->params['breadcrumbs'][] = ['label' => 'Mreceipt Byprods', 'url' => ['index']];
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