<?php

/* @var $this yii\web\View */
/* @var $model app\models\VenBalance */

$this->title = 'Update Ven Balance: ' . $model->vendor_id;
$this->params['breadcrumbs'][] = ['label' => 'Ven Balances', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->vendor_id, 'url' => ['view', 'vendor_id' => $model->vendor_id, 'currency_id' => $model->currency_id]];
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