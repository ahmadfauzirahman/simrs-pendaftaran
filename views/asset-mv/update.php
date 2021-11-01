<?php

/* @var $this yii\web\View */
/* @var $model app\models\AssetMv */

$this->title = 'Update Asset Mv: ' . $model->mv_id;
$this->params['breadcrumbs'][] = ['label' => 'Asset Mvs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->mv_id, 'url' => ['view', 'id' => $model->mv_id]];
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