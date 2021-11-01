<?php

/* @var $this yii\web\View */
/* @var $model app\models\FolioMedStatus */

$this->title = 'Update Folio Med Status: ' . $model->history_id;
$this->params['breadcrumbs'][] = ['label' => 'Folio Med Statuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->history_id, 'url' => ['view', 'id' => $model->history_id]];
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