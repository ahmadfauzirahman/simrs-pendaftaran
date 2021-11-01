<?php

/* @var $this yii\web\View */
/* @var $model app\models\CusBalance */

$this->title = 'Update Cus Balance: ' . $model->customer_id;
$this->params['breadcrumbs'][] = ['label' => 'Cus Balances', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->customer_id, 'url' => ['view', 'customer_id' => $model->customer_id, 'currency_id' => $model->currency_id]];
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