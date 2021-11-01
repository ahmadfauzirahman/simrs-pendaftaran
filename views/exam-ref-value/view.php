<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ExamRefValue */

$this->title = $model->exam_id;
$this->params['breadcrumbs'][] = ['label' => 'Exam Ref Values', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <p>
                        <?= Html::a('Update', ['update', 'exam_id' => $model->exam_id, 'seq' => $model->seq], ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('Delete', ['delete', 'exam_id' => $model->exam_id, 'seq' => $model->seq], [
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
                            'exam_id',
                            'seq',
                            'sex',
                            'age_range1',
                            'age_range2',
                            'age_unit',
                            'operator1',
                            'value1',
                            'conj',
                            'operator2',
                            'value2',
                            'plusmin',
                            'reference_value:ntext',
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