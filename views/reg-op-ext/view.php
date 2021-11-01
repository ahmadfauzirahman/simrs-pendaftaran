<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\RegOpExt */

$this->title = $model->reg_op_id;
$this->params['breadcrumbs'][] = ['label' => 'Reg Op Exts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <p>
                        <?= Html::a('Update', ['update', 'id' => $model->reg_op_id], ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('Delete', ['delete', 'id' => $model->reg_op_id], [
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
                            'reg_op_id',
                            'reg_id',
                            'reg_op_no',
                            'date_op',
                            'diag_medis_id',
                            'tind_medis_id',
                            'ot_1',
                            'ot_2',
                            'ot_3',
                            'ot_4',
                            'ot_5',
                            'ot_6',
                            'a_1',
                            'a_2',
                            'a_3',
                            'a_4',
                            'g_1',
                            'g_2',
                            'g_3',
                            'g_4',
                            'g_5',
                            'am_1',
                            'am_2',
                            'am_3',
                            'am_4',
                            'am_5',
                            'am_6',
                            'am_7',
                            'am_8',
                            'time_op1',
                            'time_op2',
                            'time_op3',
                            'staff_kons',
                            'staff_op',
                            'staff_anes',
                            'staff_panes',
                            'staff_anak',
                            'asisten_id',
                            'instrument_id',
                            'on_loop',
                            'sa_1',
                            'sa_2',
                            'ods_1',
                            'ods_2',
                            'ods_3',
                            'pj_id',
                            'rr_id',
                            'pa',
                            'notes:ntext',
                            'spes_id',
                            'created_user_id',
                            'created_time',
                            'modified_user_id',
                            'modified_time',
                            'posted',
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