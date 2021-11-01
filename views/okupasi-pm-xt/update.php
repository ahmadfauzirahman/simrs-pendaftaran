<?php

/* @var $this yii\web\View */
/* @var $model app\models\OkupasiPmXt */

$this->title = 'Update Okupasi Pm Xt: ' . $model->pm_id;
$this->params['breadcrumbs'][] = ['label' => 'Okupasi Pm Xts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->pm_id, 'url' => ['view', 'id' => $model->pm_id]];
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