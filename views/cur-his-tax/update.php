<?php

/* @var $this yii\web\View */
/* @var $model app\models\CurHisTax */

$this->title = 'Update Cur His Tax: ' . $model->currency_id;
$this->params['breadcrumbs'][] = ['label' => 'Cur His Taxes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->currency_id, 'url' => ['view', 'currency_id' => $model->currency_id, 'seq' => $model->seq]];
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