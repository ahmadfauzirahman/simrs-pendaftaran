<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Customer */

$this->title = $model->customer_id;
$this->params['breadcrumbs'][] = ['label' => 'Customers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <p>
                        <?= Html::a('Update', ['update', 'id' => $model->customer_id], ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('Delete', ['delete', 'id' => $model->customer_id], [
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
                            'customer_no',
                            'customer_name',
                            'address_line1',
                            'address_line2',
                            'city',
                            'state_prov',
                            'zipcode',
                            'country',
                            'contact',
                            'phone',
                            'fax',
                            'email:email',
                            'webpage',
                            'cus_type_id',
                            'cus_group_id',
                            'tax1_id',
                            'tax2_id',
                            'tax1_exemption_no',
                            'tax2_exemption_no',
                            'tax_no',
                            'currency_id',
                            'credit_limit_enabled',
                            'credit_limit_amount',
                            'credit_limit_restriction',
                            'disc_pc',
                            'disc_days',
                            'net_days',
                            'cod',
                            'disabled',
                            'print_message',
                            'allow_backorders',
                            'salesman_id',
                            'shipment_contact_seq',
                            'message_line1',
                            'message_line2',
                            'notes:ntext',
                            'created_user_id',
                            'created_time',
                            'modified_user_id',
                            'modified_time',
                            'carrier_id',
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