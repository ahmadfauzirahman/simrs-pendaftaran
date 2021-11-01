<?php

/* @var $this yii\web\View */
/* @var $model app\models\BpjsRuang */

$this->title = 'Update Bpjs Ruang: ' . $model->unit_id;
$this->params['breadcrumbs'][] = ['label' => 'Bpjs Ruangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->unit_id, 'url' => ['view', 'id' => $model->unit_id]];
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