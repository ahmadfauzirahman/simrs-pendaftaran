<?php

/* @var $this yii\web\View */
/* @var $model app\models\BpjsVerification */

$this->title = 'Update Bpjs Verification: ' . $model->user_name;
$this->params['breadcrumbs'][] = ['label' => 'Bpjs Verifications', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->user_name, 'url' => ['view', 'user_name' => $model->user_name, 'request_time' => $model->request_time, 'seq' => $model->seq]];
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