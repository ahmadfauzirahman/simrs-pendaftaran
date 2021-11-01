<?php

/* @var $this yii\web\View */
/* @var $model app\models\MaintResult */

$this->title = 'Update Maint Result: ' . $model->result_id;
$this->params['breadcrumbs'][] = ['label' => 'Maint Results', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->result_id, 'url' => ['view', 'id' => $model->result_id]];
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