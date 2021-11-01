<?php

/* @var $this yii\web\View */
/* @var $model app\models\ScrtPolicyLogin */

$this->title = 'Update Scrt Policy Login: ' . $model->policy_id;
$this->params['breadcrumbs'][] = ['label' => 'Scrt Policy Logins', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->policy_id, 'url' => ['view', 'policy_id' => $model->policy_id, 'seq' => $model->seq]];
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