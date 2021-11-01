<?php

/* @var $this yii\web\View */
/* @var $model app\models\Cos */

$this->title = 'Update Cos: ' . $model->cos_id;
$this->params['breadcrumbs'][] = ['label' => 'Cos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->cos_id, 'url' => ['view', 'id' => $model->cos_id]];
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