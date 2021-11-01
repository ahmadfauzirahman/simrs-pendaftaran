<?php

/* @var $this yii\web\View */
/* @var $model app\models\ExamItem */

$this->title = 'Update Exam Item: ' . $model->exam_id;
$this->params['breadcrumbs'][] = ['label' => 'Exam Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->exam_id, 'url' => ['view', 'exam_id' => $model->exam_id, 'item_id' => $model->item_id]];
$this->params['breadcrumbs'][] = 'Update';
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <?=$this->render('_form', [
                        'model' => $model
                    ]) ?>
                </div>
            </div>
        </div>
        <!--.card-body-->
    </div>
    <!--.card-->
</div>