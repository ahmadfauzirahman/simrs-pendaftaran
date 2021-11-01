<?php

/* @var $this yii\web\View */
/* @var $model app\models\ExamRefValue */

$this->title = 'Update Exam Ref Value: ' . $model->exam_id;
$this->params['breadcrumbs'][] = ['label' => 'Exam Ref Values', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->exam_id, 'url' => ['view', 'exam_id' => $model->exam_id, 'seq' => $model->seq]];
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