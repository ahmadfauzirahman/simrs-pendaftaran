<?php

/* @var $this yii\web\View */
/* @var $model app\models\Salesman */

$this->title = 'Update Salesman: ' . $model->salesman_id;
$this->params['breadcrumbs'][] = ['label' => 'Salesmen', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->salesman_id, 'url' => ['view', 'id' => $model->salesman_id]];
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