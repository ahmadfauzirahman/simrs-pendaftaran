<?php

/* @var $this yii\web\View */
/* @var $model app\models\MaintRes */

$this->title = 'Update Maint Res: ' . $model->res_id;
$this->params['breadcrumbs'][] = ['label' => 'Maint Res', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->res_id, 'url' => ['view', 'id' => $model->res_id]];
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