<?php

/* @var $this yii\web\View */
/* @var $model app\models\StaffFeeCriteria */

$this->title = 'Update Staff Fee Criteria: ' . $model->staff_id;
$this->params['breadcrumbs'][] = ['label' => 'Staff Fee Criterias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->staff_id, 'url' => ['view', 'staff_id' => $model->staff_id, 'item_id' => $model->item_id, 'item_type_ide' => $model->item_type_ide, 'item_group_id' => $model->item_group_id, 'dept_id' => $model->dept_id, 'unit_id' => $model->unit_id, 'sub_unit_id' => $model->sub_unit_id, 'service_cos_id' => $model->service_cos_id, 'pay_by_id' => $model->pay_by_id]];
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