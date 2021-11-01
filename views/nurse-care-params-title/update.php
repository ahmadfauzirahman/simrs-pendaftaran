<?php

/* @var $this yii\web\View */
/* @var $model app\models\NurseCareParamsTitle */

$this->title = 'Update Nurse Care Params Title: ' . $model->nurse_care_param_id;
$this->params['breadcrumbs'][] = ['label' => 'Nurse Care Params Titles', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nurse_care_param_id, 'url' => ['view', 'id' => $model->nurse_care_param_id]];
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