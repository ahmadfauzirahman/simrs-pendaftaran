<?php

/* @var $this yii\web\View */
/* @var $model app\models\OkupBodyItemXt */

$this->title = 'Update Okup Body Item Xt: ' . $model->body_id;
$this->params['breadcrumbs'][] = ['label' => 'Okup Body Item Xts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->body_id, 'url' => ['view', 'id' => $model->body_id]];
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