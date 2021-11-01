<?php

/* @var $this yii\web\View */
/* @var $model app\models\PicPay */

$this->title = 'Update Pic Pay: ' . $model->pay_id;
$this->params['breadcrumbs'][] = ['label' => 'Pic Pays', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->pay_id, 'url' => ['view', 'id' => $model->pay_id]];
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