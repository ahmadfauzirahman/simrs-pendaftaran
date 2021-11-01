<?php

/* @var $this yii\web\View */
/* @var $model app\models\UsageEn */

$this->title = 'Update Usage En: ' . $model->usage;
$this->params['breadcrumbs'][] = ['label' => 'Usage Ens', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->usage, 'url' => ['view', 'id' => $model->usage]];
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