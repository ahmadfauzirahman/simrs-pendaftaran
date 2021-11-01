<?php

/* @var $this yii\web\View */
/* @var $model app\models\MedrecRequest */

$this->title = 'Update Medrec Request: ' . $model->mr_request_id;
$this->params['breadcrumbs'][] = ['label' => 'Medrec Requests', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->mr_request_id, 'url' => ['view', 'id' => $model->mr_request_id]];
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