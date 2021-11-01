<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\AssetDepYear */

$this->title = $model->asset_id;
$this->params['breadcrumbs'][] = ['label' => 'Asset Dep Years', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <p>
                        <?= Html::a('Update', ['update', 'asset_id' => $model->asset_id, 'year_no' => $model->year_no], ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('Delete', ['delete', 'asset_id' => $model->asset_id, 'year_no' => $model->year_no], [
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
                            'asset_id',
                            'year_no',
                            'rate_year',
                            'dep_year',
                            'acc_dep_year',
                            'book_value',
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