<?php

/* @var $this yii\web\View */
/* @var $model app\models\SubUnit */

$this->title = 'Update Sub Unit: ' . $model->sub_unit_id;
$this->params['breadcrumbs'][] = ['label' => 'Sub Units', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->sub_unit_id, 'url' => ['view', 'id' => $model->sub_unit_id]];
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