<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Currency */

$this->title = $model->currency_id;
$this->params['breadcrumbs'][] = ['label' => 'Currencies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <p>
                        <?= Html::a('Update', ['update', 'id' => $model->currency_id], ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('Delete', ['delete', 'id' => $model->currency_id], [
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
                            'currency_id',
                            'currency_name',
                            'exchange_rate',
                            'taxation_rate',
                            'symbol',
                            'created_user_id',
                            'created_time',
                            'modified_user_id',
                            'modified_time',
                            'exchg_gl_acc_id',
                            'ap_gl_acc_id',
                            'ap_disc_gl_acc_id',
                            'ap_dp_gl_acc_id',
                            'ap_pdc_gl_acc_id',
                            'ar_gl_acc_id',
                            'ar_disc_gl_acc_id',
                            'ar_dp_gl_acc_id',
                            'ar_pdc_gl_acc_id',
                            'pl_gl_acc_id',
                            'rounding_gl_acc_id',
                            'writeoff_gl_acc_id',
                            'rounding_type',
                            'rounding_value',
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