<?php

/* @var $this yii\web\View */
/* @var $model app\models\ApInvBindDet */

$this->title = 'Update Ap Inv Bind Det: ' . $model->bind_id;
$this->params['breadcrumbs'][] = ['label' => 'Ap Inv Bind Dets', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->bind_id, 'url' => ['view', 'bind_id' => $model->bind_id, 'seq' => $model->seq]];
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