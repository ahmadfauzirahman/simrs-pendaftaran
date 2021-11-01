<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\BpjsGetSepApproval */

$this->title = $model->no_kartu;
$this->params['breadcrumbs'][] = ['label' => 'Bpjs Get Sep Approvals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <p>
                        <?= Html::a('Update', ['update', 'no_kartu' => $model->no_kartu, 'tgl_sep' => $model->tgl_sep], ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('Delete', ['delete', 'no_kartu' => $model->no_kartu, 'tgl_sep' => $model->tgl_sep], [
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
                            'no_kartu',
                            'tgl_sep',
                            'jns_pelayanan',
                            'keterangan',
                            'user',
                            'status',
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