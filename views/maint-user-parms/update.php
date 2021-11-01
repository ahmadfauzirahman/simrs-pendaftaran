<?php

/* @var $this yii\web\View */
/* @var $model app\models\MaintUserParms */

$this->title = 'Update Maint User Parms: ' . $model->user_id;
$this->params['breadcrumbs'][] = ['label' => 'Maint User Parms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->user_id, 'url' => ['view', 'id' => $model->user_id]];
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