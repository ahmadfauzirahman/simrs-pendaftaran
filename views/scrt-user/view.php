<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ScrtUser */

$this->title = $model->user_id;
$this->params['breadcrumbs'][] = ['label' => 'Scrt Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <p>
                        <?= Html::a('Update', ['update', 'id' => $model->user_id], ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('Delete', ['delete', 'id' => $model->user_id], [
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
                            'user_id',
                            'user_name',
                            'password',
                            'full_name',
                            'disable_change_pwd',
                            'change_pwd_on_login',
                            'access_expiry_option',
                            'access_expiry_date',
                            'notes:ntext',
                            'job_title',
                            'department',
                            'group_id',
                            'policy_id',
                            'active',
                            'built_in',
                            'q_server_id',
                            'login_show_alerts',
                            'email:email',
                            'opening_module_id',
                            'user_signature',
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