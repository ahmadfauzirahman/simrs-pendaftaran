<?php

/* @var $this yii\web\View */
/* @var $model app\models\UnitMedStatus */

$this->title = 'Update Unit Med Status: ' . $model->unit_id;
$this->params['breadcrumbs'][] = ['label' => 'Unit Med Statuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->unit_id, 'url' => ['view', 'unit_id' => $model->unit_id, 'seq' => $model->seq]];
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