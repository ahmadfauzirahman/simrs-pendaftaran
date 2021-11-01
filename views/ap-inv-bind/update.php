<?php

/* @var $this yii\web\View */
/* @var $model app\models\ApInvBind */

$this->title = 'Update Ap Inv Bind: ' . $model->bind_id;
$this->params['breadcrumbs'][] = ['label' => 'Ap Inv Binds', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->bind_id, 'url' => ['view', 'id' => $model->bind_id]];
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