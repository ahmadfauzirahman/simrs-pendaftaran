<?php

/* @var $this yii\web\View */
/* @var $model app\models\InternDiag */

$this->title = 'Update Intern Diag: ' . $model->intern_diag_id;
$this->params['breadcrumbs'][] = ['label' => 'Intern Diags', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->intern_diag_id, 'url' => ['view', 'id' => $model->intern_diag_id]];
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