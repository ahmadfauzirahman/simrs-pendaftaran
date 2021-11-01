<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\MaintAct */

$this->title = $model->job_id;
$this->params['breadcrumbs'][] = ['label' => 'Maint Acts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <p>
                        <?= Html::a('Update', ['update', 'id' => $model->job_id], ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('Delete', ['delete', 'id' => $model->job_id], [
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
                            'job_id',
                            'job_no',
                            'department_id',
                            'category_id',
                            'request_time',
                            'location_id',
                            'location_mark',
                            'asset_id',
                            'contact_name',
                            'severity_id',
                            'request_detail:ntext',
                            'requested_by',
                            'respond_time',
                            'responded_by',
                            'estimated_due_date',
                            'result_id',
                            'result_detail:ntext',
                            'crew_member',
                            'request_photo',
                            'result_photo',
                            'posted_by',
                            'posted_time',
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