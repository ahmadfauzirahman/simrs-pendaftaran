<?php

/* @var $this yii\web\View */
/* @var $model app\models\JknOperasi */

$this->title = 'Update Jkn Operasi: ' . $model->idoperasi;
$this->params['breadcrumbs'][] = ['label' => 'Jkn Operasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idoperasi, 'url' => ['view', 'id' => $model->idoperasi]];
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