<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Report */

$this->title = $model->report_id;
$this->params['breadcrumbs'][] = ['label' => 'Reports', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <p>
                        <?= Html::a('Update', ['update', 'id' => $model->report_id], ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('Delete', ['delete', 'id' => $model->report_id], [
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
                            'report_id',
                            'report_name',
                            'report_group_id',
                            'report_type',
                            'is_group',
                            'description:ntext',
                            'report_data',
                            'category_id',
                            'keyword',
                            'main_query_id',
                            'owner',
                            'created_user_id',
                            'created_time',
                            'modified_user_id',
                            'modified_time',
                            'sample_picture',
                            'sql_after_print',
                            'url_before_print:url',
                            'url_before_print_show:url',
                            'url_before_print_x:url',
                            'url_before_print_y:url',
                            'url_after_print:url',
                            'url_after_print_show:url',
                            'url_after_print_x:url',
                            'url_after_print_y:url',
                            'email_subject:email',
                            'email_body:ntext',
                            'email_every:email',
                            'last_execute',
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