<?php

/* @var $this yii\web\View */
/* @var $model app\models\Rldtd */

$this->title = 'Update Rldtd: ' . $model->no_urut;
$this->params['breadcrumbs'][] = ['label' => 'Rldtds', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_urut, 'url' => ['view', 'id' => $model->no_urut]];
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