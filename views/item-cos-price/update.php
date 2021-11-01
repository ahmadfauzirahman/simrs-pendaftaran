<?php

/* @var $this yii\web\View */
/* @var $model app\models\ItemCosPrice */

$this->title = 'Update Item Cos Price: ' . $model->item_id;
$this->params['breadcrumbs'][] = ['label' => 'Item Cos Prices', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->item_id, 'url' => ['view', 'item_id' => $model->item_id, 'cos_id' => $model->cos_id]];
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