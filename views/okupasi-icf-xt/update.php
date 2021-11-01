<?php

/* @var $this yii\web\View */
/* @var $model app\models\OkupasiIcfXt */

$this->title = 'Update Okupasi Icf Xt: ' . $model->icf_id;
$this->params['breadcrumbs'][] = ['label' => 'Okupasi Icf Xts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->icf_id, 'url' => ['view', 'id' => $model->icf_id]];
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