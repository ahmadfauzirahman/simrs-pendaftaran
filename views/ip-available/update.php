<?php

/* @var $this yii\web\View */
/* @var $model app\models\IpAvailable */

$this->title = 'Update Ip Available: ' . $model->act_date;
$this->params['breadcrumbs'][] = ['label' => 'Ip Availables', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->act_date, 'url' => ['view', 'id' => $model->act_date]];
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