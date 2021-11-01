<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ArPmt */

$this->title = $model->payment_id;
$this->params['breadcrumbs'][] = ['label' => 'Ar Pmts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <p>
                        <?= Html::a('Update', ['update', 'id' => $model->payment_id], ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('Delete', ['delete', 'id' => $model->payment_id], [
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
                            'payment_id',
                            'payment_no',
                            'payment_date',
                            'gl_year',
                            'gl_period',
                            'customer_id',
                            'bank_id',
                            'check_no',
                            'currency_id',
                            'exchange_rate',
                            'payment_amount',
                            'check_amount',
                            'rounding_amount',
                            'rounding_gl_account_id',
                            'due_date',
                            'posted',
                            'reconciled',
                            'void',
                            'deposit',
                            'deposit_invoice',
                            'deposit_payment',
                            'dp_amount',
                            'post_dated',
                            'created_user_id',
                            'created_time',
                            'modified_user_id',
                            'modified_time',
                            'description',
                            'notes:ntext',
                            'remark',
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