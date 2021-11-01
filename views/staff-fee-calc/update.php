<?php

/* @var $this yii\web\View */
/* @var $model app\models\StaffFeeCalc */

$this->title = 'Update Staff Fee Calc: ' . $model->staff_id;
$this->params['breadcrumbs'][] = ['label' => 'Staff Fee Calcs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->staff_id, 'url' => ['view', 'staff_id' => $model->staff_id, 'trans_date' => $model->trans_date, 'folio_id' => $model->folio_id, 'folio_seq' => $model->folio_seq]];
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