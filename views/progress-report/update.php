<?php

/* @var $this yii\web\View */
/* @var $model app\models\ProgressReport */

$this->title = 'Update Progress Report: ' . $model->doc_id;
$this->params['breadcrumbs'][] = ['label' => 'Progress Reports', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->doc_id, 'url' => ['view', 'id' => $model->doc_id]];
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