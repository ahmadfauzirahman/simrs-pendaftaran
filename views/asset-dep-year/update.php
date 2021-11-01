<?php

/* @var $this yii\web\View */
/* @var $model app\models\AssetDepYear */

$this->title = 'Update Asset Dep Year: ' . $model->asset_id;
$this->params['breadcrumbs'][] = ['label' => 'Asset Dep Years', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->asset_id, 'url' => ['view', 'asset_id' => $model->asset_id, 'year_no' => $model->year_no]];
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