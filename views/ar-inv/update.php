<?php

/* @var $this yii\web\View */
/* @var $model app\models\ArInv */

$this->title = 'Update Ar Inv: ' . $model->invoice_id;
$this->params['breadcrumbs'][] = ['label' => 'Ar Invs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->invoice_id, 'url' => ['view', 'id' => $model->invoice_id]];
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