<?php

/* @var $this yii\web\View */
/* @var $model app\models\InvAdj */

$this->title = 'Update Inv Adj: ' . $model->adjustment_id;
$this->params['breadcrumbs'][] = ['label' => 'Inv Adjs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->adjustment_id, 'url' => ['view', 'id' => $model->adjustment_id]];
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