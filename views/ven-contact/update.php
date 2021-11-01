<?php

/* @var $this yii\web\View */
/* @var $model app\models\VenContact */

$this->title = 'Update Ven Contact: ' . $model->vendor_id;
$this->params['breadcrumbs'][] = ['label' => 'Ven Contacts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->vendor_id, 'url' => ['view', 'vendor_id' => $model->vendor_id, 'seq' => $model->seq]];
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