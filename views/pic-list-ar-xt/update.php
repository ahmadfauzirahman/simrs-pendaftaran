<?php

/* @var $this yii\web\View */
/* @var $model app\models\PicListArXt */

$this->title = 'Update Pic List Ar Xt: ' . $model->pay_id;
$this->params['breadcrumbs'][] = ['label' => 'Pic List Ar Xts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->pay_id, 'url' => ['view', 'pay_id' => $model->pay_id, 'seq' => $model->seq]];
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