<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\PayBy */

$this->title = $model->pay_by_id;
$this->params['breadcrumbs'][] = ['label' => 'Pay Bies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <p>
                        <?= Html::a('Update', ['update', 'id' => $model->pay_by_id], ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('Delete', ['delete', 'id' => $model->pay_by_id], [
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
                            'pay_by_id',
                            'pay_by_name',
                            'cos_id',
                            'closing_payment_id',
                            'authorize_cos_change',
                            'dept_availability',
                            'item_availability',
                            'follow_cos',
                            'created_user_id',
                            'created_time',
                            'modified_user_id',
                            'modified_time',
                            'description:ntext',
                            'check_membership',
                            'bpjs_online',
                            'disabled',
                            'disabled_reason',
                            'pay_by_group',
                            'pay_by_group_ext',
                            'used_by_web_reservation',
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