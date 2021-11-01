<?php

/* @var $this yii\web\View */
/* @var $model app\models\DashbordBedExt */

$this->title = 'Update Dashbord Bed Ext: ' . $model->id_cos;
$this->params['breadcrumbs'][] = ['label' => 'Dashbord Bed Exts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_cos, 'url' => ['view', 'id' => $model->id_cos]];
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