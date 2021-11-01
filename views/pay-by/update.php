<?php

/* @var $this yii\web\View */
/* @var $model app\models\PayBy */

$this->title = 'Update Pay By: ' . $model->pay_by_id;
$this->params['breadcrumbs'][] = ['label' => 'Pay Bies', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->pay_by_id, 'url' => ['view', 'id' => $model->pay_by_id]];
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