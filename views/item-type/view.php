<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ItemType */

$this->title = $model->item_type_id;
$this->params['breadcrumbs'][] = ['label' => 'Item Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <p>
                        <?= Html::a('Update', ['update', 'id' => $model->item_type_id], ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('Delete', ['delete', 'id' => $model->item_type_id], [
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
                            'item_type_id',
                            'type_name',
                            'inventory',
                            'costing_method',
                            'created_user_id',
                            'created_time',
                            'modified_user_id',
                            'modified_time',
                            'sales_gl_acc_id',
                            'sales_disc_gl_acc_id',
                            'inventory_gl_acc_id',
                            'cogs_gl_acc_id',
                            'cat',
                            'sales_ret_gl_acc_id',
                            'costing_journal',
                            'item_category',
                            'item_category_en',
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