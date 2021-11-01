<?php

/* @var $this yii\web\View */
/* @var $model app\models\MaintDept */

$this->title = 'Update Maint Dept: ' . $model->dept_id;
$this->params['breadcrumbs'][] = ['label' => 'Maint Depts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->dept_id, 'url' => ['view', 'id' => $model->dept_id]];
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