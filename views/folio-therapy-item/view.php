<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\FolioTherapyItem */

$this->title = $model->folio_id;
$this->params['breadcrumbs'][] = ['label' => 'Folio Therapy Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <p>
                        <?= Html::a('Update', ['update', 'folio_id' => $model->folio_id, 'seq' => $model->seq], ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('Delete', ['delete', 'folio_id' => $model->folio_id, 'seq' => $model->seq], [
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
                            'folio_id',
                            'seq',
                            'item_id',
                            'quantity',
                            'age_weight',
                            'total_qty',
                            'dtd',
                            'uom',
                            'uom_conversion',
                            'remark',
                            'dosage',
                            'other_remark',
                            'iter',
                            'posted',
                            'posted_sent',
                            'deleted_sent',
                            'created_user_id',
                            'created_time',
                            'modified_user_id',
                            'modified_time',
                            'deleted_user_id',
                            'deleted_time',
                            'validated_by',
                            'validated_time',
                            'deleted_by',
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