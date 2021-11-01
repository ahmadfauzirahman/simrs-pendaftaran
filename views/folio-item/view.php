<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\FolioItem */

$this->title = $model->folio_id;
$this->params['breadcrumbs'][] = ['label' => 'Folio Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <p>
                        <?= Html::a('Update', ['update', 'folio_id' => $model->folio_id, 'seq' => $model->seq], ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('Delete', ['delete', 'folio_id' => $model->folio_id, 'seq' => $model->seq], [
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
                            'folio_id',
                            'seq',
                            'item_id',
                            'quantity',
                            'unit_price',
                            'disc_pc',
                            'disc_amount',
                            'remark',
                            'other_remark',
                            'self_amount',
                            'pay_by_amount',
                            'compulsory',
                            'uom',
                            'uom_conversion',
                            'tax1_amount',
                            'tax2_amount',
                            'posted',
                            'created_user_id',
                            'created_time',
                            'modified_user_id',
                            'modified_time',
                            'add_discount',
                            'dosage',
                            'staff_id',
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