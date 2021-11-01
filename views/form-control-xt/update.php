<?php

/* @var $this yii\web\View */
/* @var $model app\models\FormControlXt */

$this->title = 'Update Form Control Xt: ' . $model->control_id;
$this->params['breadcrumbs'][] = ['label' => 'Form Control Xts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->control_id, 'url' => ['view', 'id' => $model->control_id]];
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