<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\StaffFeeCriteria */

$this->title = $model->staff_id;
$this->params['breadcrumbs'][] = ['label' => 'Staff Fee Criterias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <p>
                        <?= Html::a('Update', ['update', 'staff_id' => $model->staff_id, 'item_id' => $model->item_id, 'item_type_ide' => $model->item_type_ide, 'item_group_id' => $model->item_group_id, 'dept_id' => $model->dept_id, 'unit_id' => $model->unit_id, 'sub_unit_id' => $model->sub_unit_id, 'service_cos_id' => $model->service_cos_id, 'pay_by_id' => $model->pay_by_id], ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('Delete', ['delete', 'staff_id' => $model->staff_id, 'item_id' => $model->item_id, 'item_type_ide' => $model->item_type_ide, 'item_group_id' => $model->item_group_id, 'dept_id' => $model->dept_id, 'unit_id' => $model->unit_id, 'sub_unit_id' => $model->sub_unit_id, 'service_cos_id' => $model->service_cos_id, 'pay_by_id' => $model->pay_by_id], [
                            'class' => 'btn btn-danger',
                            'data' => [
                                'confirm' => 'Are you sure you want to delete this item?',
                                'method' => 'post',
                            ],
                        ]) ?>
                    </p>
                    <?= DetailView::widget([
                        'model' => $model,
                        'attributes' => [
                            'staff_id',
                            'item_id',
                            'item_type_ide',
                            'item_group_id',
                            'dept_id',
                            'unit_id',
                            'sub_unit_id',
                            'service_cos_id',
                            'pay_by_id',
                            'changeto_account_id',
                            'share_dr_fixed',
                            'share_dr_pct',
                        ],
                    ]) ?>
                </div>
                <!--.col-md-12-->
            </div>
            <!--.row-->
        </div>
        <!--.card-body-->
    </div>
    <!--.card-->
</div>