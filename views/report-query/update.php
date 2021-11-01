<?php

/* @var $this yii\web\View */
/* @var $model app\models\ReportQuery */

$this->title = 'Update Report Query: ' . $model->report_id;
$this->params['breadcrumbs'][] = ['label' => 'Report Queries', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->report_id, 'url' => ['view', 'report_id' => $model->report_id, 'query_id' => $model->query_id]];
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