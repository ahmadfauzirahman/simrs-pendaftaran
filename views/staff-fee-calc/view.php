<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\StaffFeeCalc */

$this->title = $model->staff_id;
$this->params['breadcrumbs'][] = ['label' => 'Staff Fee Calcs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <p>
                        <?= Html::a('Update', ['update', 'staff_id' => $model->staff_id, 'trans_date' => $model->trans_date, 'folio_id' => $model->folio_id, 'folio_seq' => $model->folio_seq], ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('Delete', ['delete', 'staff_id' => $model->staff_id, 'trans_date' => $model->trans_date, 'folio_id' => $model->folio_id, 'folio_seq' => $model->folio_seq], [
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
                            'staff_id',
                            'trans_date',
                            'folio_id',
                            'folio_seq',
                            'item_id',
                            'trans_amount',
                            'share_amount',
                            'tax_amount',
                            'journal_id',
                            'gl_jfo_det_seq',
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