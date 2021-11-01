<?php

/* @var $this yii\web\View */
/* @var $model app\models\ExtBillNo */

$this->title = 'Update Ext Bill No: ' . $model->id_bill;
$this->params['breadcrumbs'][] = ['label' => 'Ext Bill Nos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_bill, 'url' => ['view', 'id' => $model->id_bill]];
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