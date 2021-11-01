<?php

/* @var $this yii\web\View */
/* @var $model app\models\ResponeTimePoliXt */

$this->title = 'Update Respone Time Poli Xt: ' . $model->respone_id;
$this->params['breadcrumbs'][] = ['label' => 'Respone Time Poli Xts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->respone_id, 'url' => ['view', 'respone_id' => $model->respone_id, 'folio_id' => $model->folio_id]];
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