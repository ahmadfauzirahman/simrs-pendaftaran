<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\OkupasiXt */

$this->title = $model->okup_id;
$this->params['breadcrumbs'][] = ['label' => 'Okupasi Xts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <p>
                        <?= Html::a('Update', ['update', 'id' => $model->okup_id], ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('Delete', ['delete', 'id' => $model->okup_id], [
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
                            'okup_id',
                            'okup_no',
                            'okup_tgl',
                            'patient_id',
                            'reg_id',
                            'occupation_id',
                            'pay_by_id',
                            'ref_id',
                            'kondisi_penyakit',
                            'sesuaitdk',
                            'rokk',
                            'a1',
                            'a2',
                            'a3',
                            'a4',
                            'a5',
                            'a6',
                            'a7',
                            'a8',
                            'b1',
                            'b2',
                            'b3',
                            'b4',
                            'b5',
                            'b6',
                            'b7',
                            'b8',
                            'b9',
                            'b10',
                            'b11',
                            'b12',
                            'c1',
                            'c2',
                            'c3',
                            'c4',
                            'c5',
                            'c6',
                            'c7',
                            'c8',
                            'c9',
                            'c10',
                            'c11',
                            'c12',
                            'c13',
                            'd1',
                            'd2',
                            'd3',
                            'd4',
                            'd5',
                            'd6',
                            'd7',
                            'd8',
                            'd9',
                            'd10',
                            'd11',
                            'd12',
                            'd13',
                            'd14',
                            'd15',
                            'd16',
                            'ok61:ntext',
                            'ok62:ntext',
                            'ok7a1',
                            'ok7a2',
                            'ok7b:ntext',
                            'occup2',
                            'occup3',
                            'lingkungan',
                            'posted',
                            'closing',
                            'control_date',
                            'status_kelaikan',
                            'rekomendasi',
                            'unit_control_id',
                            'ket_control:ntext',
                            'didapati:ntext',
                            'diagnosa:ntext',
                            'pm',
                            'pm2',
                            'tuntutan',
                            'mkes',
                            'fungsi1',
                            'fungsi2',
                            'fungsi3',
                            'risiko',
                            'rekomendasi2',
                            'rekomendasi3',
                            'toleransi',
                            'numkep',
                            'created_user_id',
                            'created_time',
                            'modified_user_id',
                            'modified_time',
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