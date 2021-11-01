<?php

/* @var $this yii\web\View */
/* @var $model app\models\BpjsSetup */

$this->title = 'Update Bpjs Setup: ' . $model->action_id;
$this->params['breadcrumbs'][] = ['label' => 'Bpjs Setups', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->action_id, 'url' => ['view', 'id' => $model->action_id]];
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