<?php

/* @var $this yii\web\View */
/* @var $model app\models\MaintSeserity */

$this->title = 'Update Maint Seserity: ' . $model->severity_id;
$this->params['breadcrumbs'][] = ['label' => 'Maint Seserities', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->severity_id, 'url' => ['view', 'id' => $model->severity_id]];
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