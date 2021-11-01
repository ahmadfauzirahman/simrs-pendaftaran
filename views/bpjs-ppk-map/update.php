<?php

/* @var $this yii\web\View */
/* @var $model app\models\BpjsPpkMap */

$this->title = 'Update Bpjs Ppk Map: ' . $model->kode_ppk;
$this->params['breadcrumbs'][] = ['label' => 'Bpjs Ppk Maps', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_ppk, 'url' => ['view', 'id' => $model->kode_ppk]];
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