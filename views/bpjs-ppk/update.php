<?php

/* @var $this yii\web\View */
/* @var $model app\models\BpjsPpk */

$this->title = 'Update Bpjs Ppk: ' . $model->ppk_code;
$this->params['breadcrumbs'][] = ['label' => 'Bpjs Ppks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ppk_code, 'url' => ['view', 'id' => $model->ppk_code]];
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