<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\FstmtLine */

$this->title = $model->stmt_id;
$this->params['breadcrumbs'][] = ['label' => 'Fstmt Lines', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <p>
                        <?= Html::a('Update', ['update', 'stmt_id' => $model->stmt_id, 'line_seq' => $model->line_seq], ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('Delete', ['delete', 'stmt_id' => $model->stmt_id, 'line_seq' => $model->line_seq], [
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
                            'stmt_id',
                            'line_seq',
                            'line_no',
                            'line_description',
                            'line_type',
                            'parent_line_seq',
                            'reverse',
                            'get_bal',
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