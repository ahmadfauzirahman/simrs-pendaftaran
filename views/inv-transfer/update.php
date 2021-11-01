<?php

/* @var $this yii\web\View */
/* @var $model app\models\InvTransfer */

$this->title = 'Update Inv Transfer: ' . $model->transfer_id;
$this->params['breadcrumbs'][] = ['label' => 'Inv Transfers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->transfer_id, 'url' => ['view', 'id' => $model->transfer_id]];
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