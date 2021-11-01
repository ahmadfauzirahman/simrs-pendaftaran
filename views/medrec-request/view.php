<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\MedrecRequest */

$this->title = $model->mr_request_id;
$this->params['breadcrumbs'][] = ['label' => 'Medrec Requests', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <p>
                        <?= Html::a('Update', ['update', 'id' => $model->mr_request_id], ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('Delete', ['delete', 'id' => $model->mr_request_id], [
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
                            'mr_request_id',
                            'from_location_id',
                            'mr_request_date',
                            'folio_id',
                            'description',
                            'request_type',
                            'posted',
                            'mr_respond_date',
                            'created_user_id',
                            'created_time',
                            'modified_user_id',
                            'modified_time',
                            'status_patient',
                            'printed',
                            'bag',
                            'reg_id',
                            'return_date',
                            'return_user',
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