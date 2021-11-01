<?php

/* @var $this yii\web\View */
/* @var $model app\models\NInvAdjDet */

$this->title = 'Update N Inv Adj Det: ' . $model->adjustment_id;
$this->params['breadcrumbs'][] = ['label' => 'N Inv Adj Dets', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->adjustment_id, 'url' => ['view', 'adjustment_id' => $model->adjustment_id, 'seq' => $model->seq]];
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