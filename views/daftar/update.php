<?php

/* @var $this yii\web\View */
/* @var $model app\models\Daftar */

$this->title = 'Update Daftar: ' . $model->id_daftar;
$this->params['breadcrumbs'][] = ['label' => 'Daftars', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_daftar, 'url' => ['view', 'id' => $model->id_daftar]];
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