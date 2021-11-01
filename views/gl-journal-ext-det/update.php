<?php

/* @var $this yii\web\View */
/* @var $model app\models\GlJournalExtDet */

$this->title = 'Update Gl Journal Ext Det: ' . $model->j_id;
$this->params['breadcrumbs'][] = ['label' => 'Gl Journal Ext Dets', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->j_id, 'url' => ['view', 'j_id' => $model->j_id, 'seq' => $model->seq]];
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