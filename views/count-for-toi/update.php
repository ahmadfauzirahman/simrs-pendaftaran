<?php

/* @var $this yii\web\View */
/* @var $model app\models\CountForToi */

$this->title = 'Update Count For Toi: ' . $model->progress_date;
$this->params['breadcrumbs'][] = ['label' => 'Count For Tois', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->progress_date, 'url' => ['view', 'id' => $model->progress_date]];
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