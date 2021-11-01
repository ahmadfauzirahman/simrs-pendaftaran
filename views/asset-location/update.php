<?php

/* @var $this yii\web\View */
/* @var $model app\models\AssetLocation */

$this->title = 'Update Asset Location: ' . $model->asset_location_id;
$this->params['breadcrumbs'][] = ['label' => 'Asset Locations', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->asset_location_id, 'url' => ['view', 'id' => $model->asset_location_id]];
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