<?php

/* @var $this yii\web\View */
/* @var $model app\models\FolioOtherExam */

$this->title = 'Update Folio Other Exam: ' . $model->folio_id;
$this->params['breadcrumbs'][] = ['label' => 'Folio Other Exams', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->folio_id, 'url' => ['view', 'folio_id' => $model->folio_id, 'seq' => $model->seq]];
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