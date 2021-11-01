<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\BedAvailableBpjs */

$this->title = $model->kodekelas;
$this->params['breadcrumbs'][] = ['label' => 'Bed Available Bpjs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <p>
                        <?= Html::a('Update', ['update', 'kodekelas' => $model->kodekelas, 'koderuang' => $model->koderuang], ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('Delete', ['delete', 'kodekelas' => $model->kodekelas, 'koderuang' => $model->koderuang], [
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
                            'kodekelas',
                            'koderuang',
                            'namakelas',
                            'namaruang',
                            'kapasitas',
                            'tersedia',
                            'tersediapria',
                            'tersediawanita',
                            'tersediapriawanita',
                            'synchronize',
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