<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ResponeTimePoliXt */

$this->title = $model->respone_id;
$this->params['breadcrumbs'][] = ['label' => 'Respone Time Poli Xts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <p>
                        <?= Html::a('Update', ['update', 'respone_id' => $model->respone_id, 'folio_id' => $model->folio_id], ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('Delete', ['delete', 'respone_id' => $model->respone_id, 'folio_id' => $model->folio_id], [
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
                            'respone_id',
                            'reg_id',
                            'folio_id',
                            'start_date',
                            'start_time',
                            'end_date',
                            'end_time',
                            'user_start',
                            'user_end',
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