<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\BillingPmtFolio */

$this->title = $model->bill_pmt_id;
$this->params['breadcrumbs'][] = ['label' => 'Billing Pmt Folios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <p>
                        <?= Html::a('Update', ['update', 'bill_pmt_id' => $model->bill_pmt_id, 'folio_id' => $model->folio_id], ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('Delete', ['delete', 'bill_pmt_id' => $model->bill_pmt_id, 'folio_id' => $model->folio_id], [
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
                            'bill_pmt_id',
                            'folio_id',
                            'amount',
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