<?php

/* @var $this yii\web\View */
/* @var $model app\models\PicCustomer */

$this->title = 'Update Pic Customer: ' . $model->pic_id;
$this->params['breadcrumbs'][] = ['label' => 'Pic Customers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->pic_id, 'url' => ['view', 'id' => $model->pic_id]];
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