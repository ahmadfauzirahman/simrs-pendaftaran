<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Kirimlis */

$this->title = $model->kode;
$this->params['breadcrumbs'][] = ['label' => 'Kirimlis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <p>
                        <?= Html::a('Update', ['update', 'id' => $model->kode], ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('Delete', ['delete', 'id' => $model->kode], [
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
                            'kode',
                            'modified_date',
                            'No_Pasien',
                            'Kode_Kunjungan',
                            'Nama',
                            'Email:email',
                            'Date_of_birth',
                            'UmurTahun',
                            'UmurBulan',
                            'UmurHari',
                            'Gender',
                            'Alamat',
                            'Diagnosa',
                            'Tgl_Periksa',
                            'Pengirim',
                            'pengirim_name',
                            'Kelas',
                            'kelas_name',
                            'Ruang',
                            'ruang_name',
                            'Cara_Bayar',
                            'cara_bayar_name',
                            'Kode_Tarif',
                            'IS_Inap',
                            'Status',
                            'is_update',
                            'reg_no',
                            'labp_id',
                            'lp_id',
                            'lab_id',
                            'id_tmp',
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