<?php

/* @var $this yii\web\View */
/* @var $model app\models\RlInPatientServiceType */

$this->title = 'Update Rl In Patient Service Type: ' . $model->server_id;
$this->params['breadcrumbs'][] = ['label' => 'Rl In Patient Service Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->server_id, 'url' => ['view', 'id' => $model->server_id]];
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