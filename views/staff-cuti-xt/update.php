<?php

/* @var $this yii\web\View */
/* @var $model app\models\StaffCutiXt */

$this->title = 'Update Staff Cuti Xt: ' . $model->cuti_id;
$this->params['breadcrumbs'][] = ['label' => 'Staff Cuti Xts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->cuti_id, 'url' => ['view', 'id' => $model->cuti_id]];
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