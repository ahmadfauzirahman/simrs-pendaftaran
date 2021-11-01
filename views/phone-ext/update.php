<?php

/* @var $this yii\web\View */
/* @var $model app\models\PhoneExt */

$this->title = 'Update Phone Ext: ' . $model->phone_id;
$this->params['breadcrumbs'][] = ['label' => 'Phone Exts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->phone_id, 'url' => ['view', 'id' => $model->phone_id]];
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