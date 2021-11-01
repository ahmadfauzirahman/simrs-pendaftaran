<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\InvAdj */

$this->title = $model->adjustment_id;
$this->params['breadcrumbs'][] = ['label' => 'Inv Adjs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <p>
                        <?= Html::a('Update', ['update', 'id' => $model->adjustment_id], ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('Delete', ['delete', 'id' => $model->adjustment_id], [
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
                            'adjustment_id',
                            'adjustment_no',
                            'adjustment_request_date',
                            'adjustment_date',
                            'warehouse_id',
                            'adjustment_type',
                            'location_id',
                            'adj_account_id',
                            'requested_by',
                            'description',
                            'approved',
                            'posted',
                            'gl_period',
                            'gl_year',
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