<?php

/* @var $this yii\web\View */
/* @var $model app\models\InvCount */

$this->title = 'Update Inv Count: ' . $model->count_id;
$this->params['breadcrumbs'][] = ['label' => 'Inv Counts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->count_id, 'url' => ['view', 'id' => $model->count_id]];
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