<?php

/* @var $this yii\web\View */
/* @var $model app\models\GlJournalExt */

$this->title = 'Update Gl Journal Ext: ' . $model->j_id;
$this->params['breadcrumbs'][] = ['label' => 'Gl Journal Exts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->j_id, 'url' => ['view', 'id' => $model->j_id]];
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