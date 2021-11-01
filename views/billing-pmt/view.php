<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\BillingPmt */

$this->title = $model->bill_pmt_id;
$this->params['breadcrumbs'][] = ['label' => 'Billing Pmts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <p>
                        <?= Html::a('Update', ['update', 'id' => $model->bill_pmt_id], ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('Delete', ['delete', 'id' => $model->bill_pmt_id], [
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
                            'bill_pmt_no',
                            'bill_pmt_date',
                            'payment_type',
                            'amount',
                            'registration_id',
                            'pay_by',
                            'notes:ntext',
                            'print_no',
                            'all_print_no',
                            'created_user_id',
                            'created_time',
                            'modified_user_id',
                            'modified_time',
                            'bill_no',
                            'bill_status',
                            'id_bill',
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