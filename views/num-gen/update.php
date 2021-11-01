<?php

/* @var $this yii\web\View */
/* @var $model app\models\NumGen */

$this->title = 'Update Num Gen: ' . $model->numbering_id;
$this->params['breadcrumbs'][] = ['label' => 'Num Gens', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->numbering_id, 'url' => ['view', 'id' => $model->numbering_id]];
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