<?php

/* @var $this yii\web\View */
/* @var $model app\models\GlJtemplateDet */

$this->title = 'Update Gl Jtemplate Det: ' . $model->jtemplate_id;
$this->params['breadcrumbs'][] = ['label' => 'Gl Jtemplate Dets', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->jtemplate_id, 'url' => ['view', 'jtemplate_id' => $model->jtemplate_id, 'seq' => $model->seq]];
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