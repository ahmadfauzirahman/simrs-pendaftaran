<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Exam */

$this->title = $model->exam_id;
$this->params['breadcrumbs'][] = ['label' => 'Exams', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <p>
                        <?= Html::a('Update', ['update', 'id' => $model->exam_id], ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('Delete', ['delete', 'id' => $model->exam_id], [
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
                            'exam_name',
                            'report_seq',
                            'exam_value:ntext',
                            'exam_method:ntext',
                            'int_ip_address',
                            'equipment_id',
                            'test_id',
                            'header_format',
                            'kategori1',
                            'created_user_id',
                            'created_time',
                            'modified_user_id',
                            'modified_time',
                            'exam_type',
                            'uom',
                            'item_id',
                            'exam_name_en',
                            'test_id_en',
                            'header_format_en',
                            'exam_result_m:ntext',
                            'exam_result_f:ntext',
                            'print_seq',
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