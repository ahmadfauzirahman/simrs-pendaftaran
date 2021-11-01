<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Unit */

$this->title = $model->unit_id;
$this->params['breadcrumbs'][] = ['label' => 'Units', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <p>
                        <?= Html::a('Update', ['update', 'id' => $model->unit_id], ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('Delete', ['delete', 'id' => $model->unit_id], [
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
                            'unit_id',
                            'dept_id',
                            'unit_name',
                            'sub_unit_caption',
                            'person_in_charge',
                            'status_available',
                            'status_used',
                            'status_housekeep',
                            'status_maintenance',
                            'sub_unit_availability',
                            'created_user_id',
                            'created_time',
                            'modified_user_id',
                            'modified_time',
                            'small_icon',
                            'large_icon',
                            'tax1_id',
                            'tax2_id',
                            'description:ntext',
                            'med_status_open',
                            'med_status_close',
                            'patient_ar_gl_acc_id',
                            'order_entry_after_reg',
                            'readonly_order_entry',
                            'gl_jtype_id',
                            'undetermined_end_servicedate',
                            'refer_unit_code',
                            'use_web_reservation',
                            'q_no',
                            'q_date',
                            'q_play',
                            'q_view',
                            'sex',
                            'q_mark',
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