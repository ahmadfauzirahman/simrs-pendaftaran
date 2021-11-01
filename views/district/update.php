<?php

/* @var $this yii\web\View */
/* @var $model app\models\District */

$this->title = 'Update District: ' . $model->district_id;
$this->params['breadcrumbs'][] = ['label' => 'Districts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->district_id, 'url' => ['view', 'id' => $model->district_id]];
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