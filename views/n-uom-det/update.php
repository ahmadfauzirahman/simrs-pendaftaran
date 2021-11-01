<?php

/* @var $this yii\web\View */
/* @var $model app\models\NUomDet */

$this->title = 'Update N Uom Det: ' . $model->uom_id;
$this->params['breadcrumbs'][] = ['label' => 'N Uom Dets', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->uom_id, 'url' => ['view', 'uom_id' => $model->uom_id, 'seq' => $model->seq]];
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