<?php

/* @var $this yii\web\View */
/* @var $model app\models\MaritalStatus */

$this->title = 'Update Marital Status: ' . $model->marital_status_id;
$this->params['breadcrumbs'][] = ['label' => 'Marital Statuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->marital_status_id, 'url' => ['view', 'id' => $model->marital_status_id]];
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