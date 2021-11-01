<?php

/* @var $this yii\web\View */
/* @var $model app\models\EventLogExt */

$this->title = 'Update Event Log Ext: ' . $model->event_log_id;
$this->params['breadcrumbs'][] = ['label' => 'Event Log Exts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->event_log_id, 'url' => ['view', 'id' => $model->event_log_id]];
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