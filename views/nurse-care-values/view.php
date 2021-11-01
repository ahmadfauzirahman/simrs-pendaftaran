<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\NurseCareValues */

$this->title = $model->nurse_care_param_id;
$this->params['breadcrumbs'][] = ['label' => 'Nurse Care Values', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <p>
                        <?= Html::a('Update', ['update', 'nurse_care_param_id' => $model->nurse_care_param_id, 'seq' => $model->seq, 'value_seq' => $model->value_seq], ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('Delete', ['delete', 'nurse_care_param_id' => $model->nurse_care_param_id, 'seq' => $model->seq, 'value_seq' => $model->value_seq], [
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
                            'nurse_care_param_id',
                            'seq',
                            'value_seq',
                            'value',
                            'value_en',
                            'show_detail',
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