<?php

/* @var $this yii\web\View */
/* @var $model app\models\ReferensiOkupasiXt */

$this->title = 'Update Referensi Okupasi Xt: ' . $model->ref_id;
$this->params['breadcrumbs'][] = ['label' => 'Referensi Okupasi Xts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ref_id, 'url' => ['view', 'id' => $model->ref_id]];
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