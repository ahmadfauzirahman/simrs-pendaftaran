<?php

/* @var $this yii\web\View */
/* @var $model app\models\OccupationXt */

$this->title = 'Update Occupation Xt: ' . $model->occupation_id;
$this->params['breadcrumbs'][] = ['label' => 'Occupation Xts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->occupation_id, 'url' => ['view', 'id' => $model->occupation_id]];
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