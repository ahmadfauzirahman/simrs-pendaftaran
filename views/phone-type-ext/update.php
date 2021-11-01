<?php

/* @var $this yii\web\View */
/* @var $model app\models\PhoneTypeExt */

$this->title = 'Update Phone Type Ext: ' . $model->phone_type_id;
$this->params['breadcrumbs'][] = ['label' => 'Phone Type Exts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->phone_type_id, 'url' => ['view', 'id' => $model->phone_type_id]];
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