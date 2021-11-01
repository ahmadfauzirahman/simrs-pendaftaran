<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ScrtPolicy */

$this->title = $model->policy_id;
$this->params['breadcrumbs'][] = ['label' => 'Scrt Policies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <p>
                        <?= Html::a('Update', ['update', 'id' => $model->policy_id], ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('Delete', ['delete', 'id' => $model->policy_id], [
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
                            'policy_id',
                            'policy_name',
                            'notes:ntext',
                            'login_option',
                            'full_access_module',
                            'reg_menu_cap',
                            'order_menu_cap',
                            'billing_menu_cap',
                            'pos_menu_cap',
                            'allow_access_self_amount',
                            'allow_access_pay_by_amount',
                            'oe_allow_change_price',
                            'oe_allow_change_disc',
                            'oe_show_price_column',
                            'oe_show_disc_column',
                            'oe_show_tax_column',
                            'oe_show_total_amount_column',
                            'oe_show_self_amount_column',
                            'oe_show_pay_by_amount_column',
                            'oe_allow_change_self_amount',
                            'oe_allow_change_payby_amount',
                            'oe_allow_change_med_status',
                            'oe_allow_change_uom',
                            'exam_tab',
                            'built_in',
                            'custom_form_id',
                            'oe_allow_folio_correction',
                            'oe_allow_change_pay_by',
                            'oe_allow_change_reg_status',
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