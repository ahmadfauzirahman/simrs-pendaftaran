<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ItemCosPrice */

$this->title = $model->item_id;
$this->params['breadcrumbs'][] = ['label' => 'Item Cos Prices', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <p>
                        <?= Html::a('Update', ['update', 'item_id' => $model->item_id, 'cos_id' => $model->cos_id], ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('Delete', ['delete', 'item_id' => $model->item_id, 'cos_id' => $model->cos_id], [
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
                            'item_id',
                            'cos_id',
                            'price',
                            'discount',
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