<?php

/* @var $this yii\web\View */
/* @var $model app\models\StaffStdayExt */

$this->title = 'Update Staff Stday Ext: ' . $model->id_day;
$this->params['breadcrumbs'][] = ['label' => 'Staff Stday Exts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_day, 'url' => ['view', 'id' => $model->id_day]];
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