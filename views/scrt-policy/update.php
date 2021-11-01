<?php

/* @var $this yii\web\View */
/* @var $model app\models\ScrtPolicy */

$this->title = 'Update Scrt Policy: ' . $model->policy_id;
$this->params['breadcrumbs'][] = ['label' => 'Scrt Policies', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->policy_id, 'url' => ['view', 'id' => $model->policy_id]];
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