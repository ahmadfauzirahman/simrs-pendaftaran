<?php

/* @var $this yii\web\View */
/* @var $model app\models\MaintTask */

$this->title = 'Update Maint Task: ' . $model->task_id;
$this->params['breadcrumbs'][] = ['label' => 'Maint Tasks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->task_id, 'url' => ['view', 'id' => $model->task_id]];
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