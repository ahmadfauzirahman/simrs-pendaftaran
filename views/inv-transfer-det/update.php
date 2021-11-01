<?php

/* @var $this yii\web\View */
/* @var $model app\models\InvTransferDet */

$this->title = 'Update Inv Transfer Det: ' . $model->transfer_id;
$this->params['breadcrumbs'][] = ['label' => 'Inv Transfer Dets', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->transfer_id, 'url' => ['view', 'transfer_id' => $model->transfer_id, 'seq' => $model->seq]];
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