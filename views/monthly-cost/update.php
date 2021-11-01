<?php

/* @var $this yii\web\View */
/* @var $model app\models\MonthlyCost */

$this->title = 'Update Monthly Cost: ' . $model->inv_date;
$this->params['breadcrumbs'][] = ['label' => 'Monthly Costs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->inv_date, 'url' => ['view', 'inv_date' => $model->inv_date, 'item_id' => $model->item_id]];
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