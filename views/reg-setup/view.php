<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\RegSetup */

$this->title = $model->company_id;
$this->params['breadcrumbs'][] = ['label' => 'Reg Setups', 'url' => ['index']];
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
                            'reg_rpt_cat_id',
                            'order_rpt_cat_id',
                            'pos_rpt_cat_id',
                            'billing_pmt_rpt_cat_id',
                            'nurse_care_rpt_cat_id',
                            'self_payby_id',
                            'bpjs_online_payby_id',
                            'created_user_id',
                            'created_time',
                            'modified_user_id',
                            'modified_time',
                            'folio_gl_posting_type',
                            'folio_gl_posting_date',
                            'folio_gl_posting_period',
                            'folio_gl_posting_year',
                            'folio_gl_journal_id_active',
                            'default_show_patient',
                            'rof_rpt_cat_id',
                            'sustatus_allowed_reg',
                            'reregister_restriction',
                            'auto_post_folio_refer',
                            'release_cancelled_rsvp',
                            'web_rsvp_url:url',
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