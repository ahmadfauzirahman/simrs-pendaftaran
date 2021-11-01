<?php

/* @var $this yii\web\View */
/* @var $model app\models\DiagType */

$this->title = 'Update Diag Type: ' . $model->diag_type_id;
$this->params['breadcrumbs'][] = ['label' => 'Diag Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->diag_type_id, 'url' => ['view', 'id' => $model->diag_type_id]];
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