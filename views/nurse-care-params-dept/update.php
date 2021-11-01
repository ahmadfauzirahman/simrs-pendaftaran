<?php

/* @var $this yii\web\View */
/* @var $model app\models\NurseCareParamsDept */

$this->title = 'Update Nurse Care Params Dept: ' . $model->nurse_care_param_id;
$this->params['breadcrumbs'][] = ['label' => 'Nurse Care Params Depts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nurse_care_param_id, 'url' => ['view', 'nurse_care_param_id' => $model->nurse_care_param_id, 'seq' => $model->seq]];
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