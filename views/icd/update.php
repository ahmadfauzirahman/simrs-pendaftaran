<?php

/* @var $this yii\web\View */
/* @var $model app\models\Icd */

$this->title = 'Update Icd: ' . $model->icd_id;
$this->params['breadcrumbs'][] = ['label' => 'Icds', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->icd_id, 'url' => ['view', 'id' => $model->icd_id]];
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