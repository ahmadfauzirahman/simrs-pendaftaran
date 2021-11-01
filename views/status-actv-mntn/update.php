<?php

/* @var $this yii\web\View */
/* @var $model app\models\StatusActvMntn */

$this->title = 'Update Status Actv Mntn: ' . $model->status_id;
$this->params['breadcrumbs'][] = ['label' => 'Status Actv Mntns', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->status_id, 'url' => ['view', 'id' => $model->status_id]];
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