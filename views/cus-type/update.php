<?php

/* @var $this yii\web\View */
/* @var $model app\models\CusType */

$this->title = 'Update Cus Type: ' . $model->cus_type_id;
$this->params['breadcrumbs'][] = ['label' => 'Cus Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->cus_type_id, 'url' => ['view', 'id' => $model->cus_type_id]];
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