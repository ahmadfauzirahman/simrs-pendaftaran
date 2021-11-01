<?php

/* @var $this yii\web\View */
/* @var $model app\models\StaffViewScheduleExt */

$this->title = 'Update Staff View Schedule Ext: ' . $model->schedule_id;
$this->params['breadcrumbs'][] = ['label' => 'Staff View Schedule Exts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->schedule_id, 'url' => ['view', 'id' => $model->schedule_id]];
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