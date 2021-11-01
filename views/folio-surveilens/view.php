<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\FolioSurveilens */

$this->title = $model->tindakan_id;
$this->params['breadcrumbs'][] = ['label' => 'Folio Surveilens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <p>
                        <?= Html::a('Update', ['update', 'id' => $model->tindakan_id], ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('Delete', ['delete', 'id' => $model->tindakan_id], [
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
                            'tindakan_id',
                            'registration_id',
                            'diagnosaMasuk',
                            'jenisTindakan',
                            'lokasi',
                            'tanggalPasang',
                            'tanggalCabut',
                            'totalHari',
                            'tanggalInfeksi',
                            'catatan',
                            'diagnosa',
                            'tanggalOperasi1',
                            'lamaOperasi1',
                            'tanggalOperasi2',
                            'lamaOperasi2',
                            'jenisOperasi',
                            'tindakanOperasi',
                            'asaScore',
                            'ido',
                            'idoHari',
                            'idoKultur',
                            'isk',
                            'iskHari',
                            'iskKultur',
                            'pneumonia',
                            'pneumoniaHari',
                            'pneumoniaKultur',
                            'iadp',
                            'iadpHari',
                            'iadpKultur',
                            'lain',
                            'lainHari',
                            'lainKultur',
                            'dosis1',
                            'jmlDosis1',
                            'tglMulaiDosis1',
                            'tglSelsaiDosis1',
                            'dosis2',
                            'jmlDosis2',
                            'tglMulaiDosis2',
                            'tglSelsaiDosis2',
                            'dosis3',
                            'jmlDosis3',
                            'tglMulaiDosis3',
                            'tglSelsaiDosis3',
                            'dosis4',
                            'jmlDosis4',
                            'tglMulaiDosis4',
                            'tglSelsaiDosis4',
                            'waktuPemberian',
                            'tglPasienKeluar',
                            'pindahRs',
                            'diagnosaTerakhir',
                            'faktorPenyakit',
                            'radiologi',
                            'labor',
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