<?php

/* @var $this yii\web\View */
/* @var $model app\models\OkupasiTugasXt */

$this->title = 'Update Okupasi Tugas Xt: ' . $model->okup_id;
$this->params['breadcrumbs'][] = ['label' => 'Okupasi Tugas Xts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->okup_id, 'url' => ['view', 'okup_id' => $model->okup_id, 'seq' => $model->seq]];
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