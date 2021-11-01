<?php

/* @var $this yii\web\View */
/* @var $model app\models\BpjsUnit */

$this->title = 'Update Bpjs Unit: ' . $model->unit_id;
$this->params['breadcrumbs'][] = ['label' => 'Bpjs Units', 'url' => ['index']];
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