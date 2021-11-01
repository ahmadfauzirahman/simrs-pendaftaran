<?php

/* @var $this yii\web\View */
/* @var $model app\models\Exam */

$this->title = 'Update Exam: ' . $model->exam_id;
$this->params['breadcrumbs'][] = ['label' => 'Exams', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->exam_id, 'url' => ['view', 'id' => $model->exam_id]];
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