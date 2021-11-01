<?php

/* @var $this yii\web\View */
/* @var $model app\models\McuIndetXt */

$this->title = 'Update Mcu Indet Xt: ' . $model->mcu_id;
$this->params['breadcrumbs'][] = ['label' => 'Mcu Indet Xts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->mcu_id, 'url' => ['view', 'mcu_id' => $model->mcu_id, 'seq' => $model->seq]];
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