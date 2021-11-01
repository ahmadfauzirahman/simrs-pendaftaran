<?php

/* @var $this yii\web\View */
/* @var $model app\models\Ethnicity */

$this->title = 'Update Ethnicity: ' . $model->ethnicity_id;
$this->params['breadcrumbs'][] = ['label' => 'Ethnicities', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ethnicity_id, 'url' => ['view', 'id' => $model->ethnicity_id]];
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