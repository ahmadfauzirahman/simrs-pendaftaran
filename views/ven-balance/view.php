<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\VenBalance */

$this->title = $model->vendor_id;
$this->params['breadcrumbs'][] = ['label' => 'Ven Balances', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <p>
                        <?= Html::a('Update', ['update', 'vendor_id' => $model->vendor_id, 'currency_id' => $model->currency_id], ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('Delete', ['delete', 'vendor_id' => $model->vendor_id, 'currency_id' => $model->currency_id], [
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
                            'vendor_id',
                            'currency_id',
                            'balance',
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