<?php

/* @var $this yii\web\View */
/* @var $model app\models\Dtd */

$this->title = 'Update Dtd: ' . $model->dtd_id;
$this->params['breadcrumbs'][] = ['label' => 'Dtds', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->dtd_id, 'url' => ['view', 'id' => $model->dtd_id]];
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