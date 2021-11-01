<?php

/* @var $this yii\web\View */
/* @var $model app\models\VendorServiceExt */

$this->title = 'Update Vendor Service Ext: ' . $model->vendor_id;
$this->params['breadcrumbs'][] = ['label' => 'Vendor Service Exts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->vendor_id, 'url' => ['view', 'id' => $model->vendor_id]];
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