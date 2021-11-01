<?php

/* @var $this yii\web\View */
/* @var $model app\models\blackListHistory */

$this->title = 'Update Black List History: ' . $model->black_list_id;
$this->params['breadcrumbs'][] = ['label' => 'Black List Histories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->black_list_id, 'url' => ['view', 'id' => $model->black_list_id]];
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