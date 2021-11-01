<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Vendor */

$this->title = $model->vendor_id;
$this->params['breadcrumbs'][] = ['label' => 'Vendors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <p>
                        <?= Html::a('Update', ['update', 'id' => $model->vendor_id], ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('Delete', ['delete', 'id' => $model->vendor_id], [
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
                            'vendor_id',
                            'vendor_no',
                            'vendor_name',
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
                            'ven_type_id',
                            'ven_group_id',
                            'tax1_id',
                            'tax2_id',
                            'tax_no',
                            'currency_id',
                            'cod',
                            'net_days',
                            'disc_days',
                            'disc_pc',
                            'disabled',
                            'message_line1',
                            'message_line2',
                            'print_message',
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