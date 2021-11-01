<?php

/* @var $this yii\web\View */
/* @var $model app\models\LaborLuarXt */

$this->title = 'Update Labor Luar Xt: ' . $model->lab_id;
$this->params['breadcrumbs'][] = ['label' => 'Labor Luar Xts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->lab_id, 'url' => ['view', 'id' => $model->lab_id]];
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