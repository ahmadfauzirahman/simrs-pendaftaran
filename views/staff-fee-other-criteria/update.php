<?php

/* @var $this yii\web\View */
/* @var $model app\models\StaffFeeOtherCriteria */

$this->title = 'Update Staff Fee Other Criteria: ' . $model->staff_id;
$this->params['breadcrumbs'][] = ['label' => 'Staff Fee Other Criterias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->staff_id, 'url' => ['view', 'id' => $model->staff_id]];
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