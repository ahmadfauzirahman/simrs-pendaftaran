<?php

/* @var $this yii\web\View */
/* @var $model app\models\MaintUserPerms */

$this->title = 'Update Maint User Perms: ' . $model->user_id;
$this->params['breadcrumbs'][] = ['label' => 'Maint User Perms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->user_id, 'url' => ['view', 'user_id' => $model->user_id, 'page_name' => $model->page_name, 'perm_name' => $model->perm_name]];
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