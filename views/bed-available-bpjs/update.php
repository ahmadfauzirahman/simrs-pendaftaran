<?php

/* @var $this yii\web\View */
/* @var $model app\models\BedAvailableBpjs */

$this->title = 'Update Bed Available Bpjs: ' . $model->kodekelas;
$this->params['breadcrumbs'][] = ['label' => 'Bed Available Bpjs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kodekelas, 'url' => ['view', 'kodekelas' => $model->kodekelas, 'koderuang' => $model->koderuang]];
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