<?php

/* @var $this yii\web\View */
/* @var $model app\models\DeptUser */

$this->title = 'Update Dept User: ' . $model->dept_id;
$this->params['breadcrumbs'][] = ['label' => 'Dept Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->dept_id, 'url' => ['view', 'dept_id' => $model->dept_id, 'user_id' => $model->user_id]];
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