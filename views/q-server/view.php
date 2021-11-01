<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\QServer */

$this->title = $model->q_server_id;
$this->params['breadcrumbs'][] = ['label' => 'Q Servers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <p>
                        <?= Html::a('Update', ['update', 'id' => $model->q_server_id], ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('Delete', ['delete', 'id' => $model->q_server_id], [
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
                            'q_server_id',
                            'q_server_name',
                            'q_server_display_name',
                            'q_server_display_short',
                            'q_server_no',
                            'q_server_color',
                            'created_user_id',
                            'created_time',
                            'modified_user_id',
                            'modified_time',
                            'user_name',
                            'last_update',
                            'ip_address',
                            'computer_name',
                            'status',
                            'registration_id',
                            'patient_id',
                            'queue_no',
                            'disabled',
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