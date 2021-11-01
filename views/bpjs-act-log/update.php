<?php

/* @var $this yii\web\View */
/* @var $model app\models\BpjsActLog */

$this->title = 'Update Bpjs Act Log: ' . $model->bpjs_act_id;
$this->params['breadcrumbs'][] = ['label' => 'Bpjs Act Logs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->bpjs_act_id, 'url' => ['view', 'id' => $model->bpjs_act_id]];
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