<?php

/* @var $this yii\web\View */
/* @var $model app\models\Ambulance */

$this->title = 'Update Ambulance: ' . $model->ambulance_id;
$this->params['breadcrumbs'][] = ['label' => 'Ambulances', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ambulance_id, 'url' => ['view', 'id' => $model->ambulance_id]];
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