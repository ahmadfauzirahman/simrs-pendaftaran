<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ServiceExt */

$this->title = $model->service_id;
$this->params['breadcrumbs'][] = ['label' => 'Service Exts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <p>
                        <?= Html::a('Update', ['update', 'id' => $model->service_id], ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('Delete', ['delete', 'id' => $model->service_id], [
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
                            'service_id',
                            'service_no',
                            'asset_id',
                            'vendor_id',
                            'items_net_amount',
                            'disc_pc',
                            'disc_amount',
                            'amount',
                            'service_date',
                            'staff',
                            'notes:ntext',
                            'km1',
                            'km2',
                            'km3',
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