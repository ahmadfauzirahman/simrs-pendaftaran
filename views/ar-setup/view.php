<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ArSetup */

$this->title = $model->company_id;
$this->params['breadcrumbs'][] = ['label' => 'Ar Setups', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <p>
                        <?= Html::a('Update', ['update', 'id' => $model->company_id], ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('Delete', ['delete', 'id' => $model->company_id], [
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
                            'company_id',
                            'invoice_warehouse_id',
                            'return_warehouse_id',
                            'credit_limit_authority',
                            'ar_inv_gl_jtype_id',
                            'ar_pmt_gl_jtype_id',
                            'ar_inv_reg_gl_type_id',
                            'default_show_invoice',
                            'default_show_payment',
                            'ar_inv_rpt_cat_id',
                            'ar_inv_bind_rpt_cat_id',
                            'ar_pmt_rpt_cat_id',
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