<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\CustomerItemPrice */

$this->title = $model->customer_id;
$this->params['breadcrumbs'][] = ['label' => 'Customer Item Prices', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <p>
                        <?= Html::a('Update', ['update', 'customer_id' => $model->customer_id, 'seq' => $model->seq], ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('Delete', ['delete', 'customer_id' => $model->customer_id, 'seq' => $model->seq], [
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
                            'customer_id',
                            'seq',
                            'item_id',
                            'unit_price',
                            'unit_discount',
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