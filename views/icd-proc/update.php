<?php

/* @var $this yii\web\View */
/* @var $model app\models\IcdProc */

$this->title = 'Update Icd Proc: ' . $model->icd_id;
$this->params['breadcrumbs'][] = ['label' => 'Icd Procs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->icd_id, 'url' => ['view', 'id' => $model->icd_id]];
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