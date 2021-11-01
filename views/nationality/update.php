<?php

/* @var $this yii\web\View */
/* @var $model app\models\Nationality */

$this->title = 'Update Nationality: ' . $model->nationality_id;
$this->params['breadcrumbs'][] = ['label' => 'Nationalities', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nationality_id, 'url' => ['view', 'id' => $model->nationality_id]];
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