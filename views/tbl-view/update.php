<?php

/* @var $this yii\web\View */
/* @var $model app\models\TblView */

$this->title = 'Update Tbl View: ' . $model->tbl_view_id;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Views', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tbl_view_id, 'url' => ['view', 'id' => $model->tbl_view_id]];
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