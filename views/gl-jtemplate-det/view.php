<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\GlJtemplateDet */

$this->title = $model->jtemplate_id;
$this->params['breadcrumbs'][] = ['label' => 'Gl Jtemplate Dets', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <p>
                        <?= Html::a('Update', ['update', 'jtemplate_id' => $model->jtemplate_id, 'seq' => $model->seq], ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('Delete', ['delete', 'jtemplate_id' => $model->jtemplate_id, 'seq' => $model->seq], [
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
                            'jtemplate_id',
                            'seq',
                            'account_id',
                            'location_id',
                            'amount',
                            'description',
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