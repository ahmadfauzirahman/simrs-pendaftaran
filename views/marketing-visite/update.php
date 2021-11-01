<?php

/* @var $this yii\web\View */
/* @var $model app\models\MarketingVisite */

$this->title = 'Update Marketing Visite: ' . $model->marketing_id;
$this->params['breadcrumbs'][] = ['label' => 'Marketing Visites', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->marketing_id, 'url' => ['view', 'id' => $model->marketing_id]];
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