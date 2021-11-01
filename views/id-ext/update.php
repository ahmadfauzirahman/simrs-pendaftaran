<?php

/* @var $this yii\web\View */
/* @var $model app\models\IdExt */

$this->title = 'Update Id Ext: ' . $model->num_id;
$this->params['breadcrumbs'][] = ['label' => 'Id Exts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->num_id, 'url' => ['view', 'num_id' => $model->num_id, 'name_id' => $model->name_id]];
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