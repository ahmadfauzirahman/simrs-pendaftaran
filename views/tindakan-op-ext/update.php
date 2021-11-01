<?php

/* @var $this yii\web\View */
/* @var $model app\models\TindakanOpExt */

$this->title = 'Update Tindakan Op Ext: ' . $model->tindakan_id;
$this->params['breadcrumbs'][] = ['label' => 'Tindakan Op Exts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tindakan_id, 'url' => ['view', 'id' => $model->tindakan_id]];
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