<?php

/* @var $this yii\web\View */
/* @var $model app\models\MedrecMovement */

$this->title = 'Update Medrec Movement: ' . $model->medrec_movement_id;
$this->params['breadcrumbs'][] = ['label' => 'Medrec Movements', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->medrec_movement_id, 'url' => ['view', 'id' => $model->medrec_movement_id]];
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