<?php

/* @var $this yii\web\View */
/* @var $model app\models\ReportVar */

$this->title = 'Update Report Var: ' . $model->variable_id;
$this->params['breadcrumbs'][] = ['label' => 'Report Vars', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->variable_id, 'url' => ['view', 'id' => $model->variable_id]];
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