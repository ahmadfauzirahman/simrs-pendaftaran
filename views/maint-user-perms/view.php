<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\MaintUserPerms */

$this->title = $model->user_id;
$this->params['breadcrumbs'][] = ['label' => 'Maint User Perms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <p>
                        <?= Html::a('Update', ['update', 'user_id' => $model->user_id, 'page_name' => $model->page_name, 'perm_name' => $model->perm_name], ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('Delete', ['delete', 'user_id' => $model->user_id, 'page_name' => $model->page_name, 'perm_name' => $model->perm_name], [
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
                            'page_name',
                            'perm_name',
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