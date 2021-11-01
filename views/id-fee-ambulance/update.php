<?php

/* @var $this yii\web\View */
/* @var $model app\models\IdFeeAmbulance */

$this->title = 'Update Id Fee Ambulance: ' . $model->id_name;
$this->params['breadcrumbs'][] = ['label' => 'Id Fee Ambulances', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_name, 'url' => ['view', 'id' => $model->id_name]];
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