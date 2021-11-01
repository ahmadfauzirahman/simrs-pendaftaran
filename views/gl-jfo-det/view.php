<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\GlJfoDet */

$this->title = $model->journal_id;
$this->params['breadcrumbs'][] = ['label' => 'Gl Jfo Dets', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <p>
                        <?= Html::a('Update', ['update', 'journal_id' => $model->journal_id, 'seq' => $model->seq], ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('Delete', ['delete', 'journal_id' => $model->journal_id, 'seq' => $model->seq], [
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
                            'journal_id',
                            'seq',
                            'account_id',
                            'location_id',
                            'currency_id',
                            'foreign_amount',
                            'exchange_rate',
                            'department_id',
                            'description',
                            'amount',
                            'item_id',
                            'item_mtl_id',
                            'item_kits_id',
                            'folio_id',
                            'folio_seq',
                            'folio_mtl_seq',
                            'folio_kits_seq',
                            'folio_line_amount',
                            'tax1_id',
                            'tax1_amount',
                            'tax2_id',
                            'tax2_amount',
                            'posted',
                            'processed',
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