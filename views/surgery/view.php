<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Surgery */

$this->title = $model->reg_id;
$this->params['breadcrumbs'][] = ['label' => 'Surgeries', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <p>
                        <?= Html::a('Update', ['update', 'id' => $model->reg_id], ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('Delete', ['delete', 'id' => $model->reg_id], [
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
                            'reg_id',
                            'staff_ahli_bedah',
                            'staff_ahli_anastesi',
                            'staff_asisten',
                            'staff_nurse_instrumen',
                            'diag_pra_op:ntext',
                            'diag_pasca_op:ntext',
                            'jaringan_eksisi:ntext',
                            'pemeriksaan_patologi',
                            'konsul_op',
                            'staff_konsul',
                            'op_name:ntext',
                            'tgl_op',
                            'start_op',
                            'end_op',
                            'end_durasi',
                            'surgery1:ntext',
                            'surgery2:ntext',
                            'surgery3:ntext',
                            'surgery4:ntext',
                            'klasifikasi_emergensi',
                            'klasifikasi_elektif',
                            'klasifikasi_poliklinis',
                            'klasifikasi_ods',
                            'klasifikasi_besar',
                            'klasifikasi_khusus',
                            'klasifikasi_sedang',
                            'klasifikasi_kecil',
                            'report_surgery_id',
                            'report_name',
                            'created_user_id',
                            'created_time',
                            'modified_user_id',
                            'modified_time:datetime',
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