<?php

/* @var $this yii\web\View */
/* @var $model app\models\Inacbgs */

$this->title = 'Update Inacbgs: ' . $model->inacbgs_id;
$this->params['breadcrumbs'][] = ['label' => 'Inacbgs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->inacbgs_id, 'url' => ['view', 'id' => $model->inacbgs_id]];
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