<?php

/* @var $this yii\web\View */
/* @var $model app\models\ServiceExtDat */

$this->title = 'Update Service Ext Dat: ' . $model->service_id;
$this->params['breadcrumbs'][] = ['label' => 'Service Ext Dats', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->service_id, 'url' => ['view', 'service_id' => $model->service_id, 'seq' => $model->seq]];
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