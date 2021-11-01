<?php

/* @var $this yii\web\View */
/* @var $model app\models\DiagOpExt */

$this->title = 'Update Diag Op Ext: ' . $model->diag_id;
$this->params['breadcrumbs'][] = ['label' => 'Diag Op Exts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->diag_id, 'url' => ['view', 'id' => $model->diag_id]];
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