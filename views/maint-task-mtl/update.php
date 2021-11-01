<?php

/* @var $this yii\web\View */
/* @var $model app\models\maintTaskMtl */

$this->title = 'Update Maint Task Mtl: ' . $model->task_id;
$this->params['breadcrumbs'][] = ['label' => 'Maint Task Mtls', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->task_id, 'url' => ['view', 'task_id' => $model->task_id, 'seq' => $model->seq]];
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