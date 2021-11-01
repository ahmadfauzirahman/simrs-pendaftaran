<?php

/* @var $this yii\web\View */
/* @var $model app\models\ScrtCustomForm */

$this->title = 'Update Scrt Custom Form: ' . $model->policy_id;
$this->params['breadcrumbs'][] = ['label' => 'Scrt Custom Forms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->policy_id, 'url' => ['view', 'policy_id' => $model->policy_id, 'custom_form_id' => $model->custom_form_id]];
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