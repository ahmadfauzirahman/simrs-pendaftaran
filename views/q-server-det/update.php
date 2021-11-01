<?php

/* @var $this yii\web\View */
/* @var $model app\models\QServerDet */

$this->title = 'Update Q Server Det: ' . $model->q_server_id;
$this->params['breadcrumbs'][] = ['label' => 'Q Server Dets', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->q_server_id, 'url' => ['view', 'q_server_id' => $model->q_server_id, 'seq' => $model->seq]];
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