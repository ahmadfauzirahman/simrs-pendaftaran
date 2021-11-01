<?php

/* @var $this yii\web\View */
/* @var $model app\models\Identity */

$this->title = 'Update Identity: ' . $model->identity_id;
$this->params['breadcrumbs'][] = ['label' => 'Identities', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->identity_id, 'url' => ['view', 'id' => $model->identity_id]];
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