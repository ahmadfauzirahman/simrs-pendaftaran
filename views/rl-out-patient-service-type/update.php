<?php

/* @var $this yii\web\View */
/* @var $model app\models\RlOutPatientServiceType */

$this->title = 'Update Rl Out Patient Service Type: ' . $model->service_id;
$this->params['breadcrumbs'][] = ['label' => 'Rl Out Patient Service Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->service_id, 'url' => ['view', 'id' => $model->service_id]];
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