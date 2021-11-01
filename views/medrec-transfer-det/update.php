<?php

/* @var $this yii\web\View */
/* @var $model app\models\MedrecTransferDet */

$this->title = 'Update Medrec Transfer Det: ' . $model->mr_transfer_id;
$this->params['breadcrumbs'][] = ['label' => 'Medrec Transfer Dets', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->mr_transfer_id, 'url' => ['view', 'mr_transfer_id' => $model->mr_transfer_id, 'seq' => $model->seq]];
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