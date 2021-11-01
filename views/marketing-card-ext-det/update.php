<?php

/* @var $this yii\web\View */
/* @var $model app\models\MarketingCardExtDet */

$this->title = 'Update Marketing Card Ext Det: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Marketing Card Ext Dets', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'card_id' => $model->card_id, 'seq' => $model->seq]];
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