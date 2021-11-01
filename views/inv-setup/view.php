<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\InvSetup */

$this->title = $model->company_id;
$this->params['breadcrumbs'][] = ['label' => 'Inv Setups', 'url' => ['index']];
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
                            'default_show_transfer',
                            'count_adjust_in_acc_id',
                            'count_adjust_out_acc_id',
                            'adj_rpt_cat_id',
                            'transfer_rpt_cat_id',
                            'count_rpt_cat_id',
                            'default_show_adjustment',
                            'default_show_count',
                            'adj_gl_jtype_id',
                            'default_show_item',
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