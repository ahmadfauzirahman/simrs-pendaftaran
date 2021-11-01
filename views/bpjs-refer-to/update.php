<?php

/* @var $this yii\web\View */
/* @var $model app\models\BpjsReferTo */

$this->title = 'Update Bpjs Refer To: ' . $model->folio_id;
$this->params['breadcrumbs'][] = ['label' => 'Bpjs Refer Tos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->folio_id, 'url' => ['view', 'id' => $model->folio_id]];
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