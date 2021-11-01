<?php

/* @var $this yii\web\View */
/* @var $model app\models\DownPayment */

$this->title = 'Update Down Payment: ' . $model->id_booking;
$this->params['breadcrumbs'][] = ['label' => 'Down Payments', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_booking, 'url' => ['view', 'id' => $model->id_booking]];
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