<?php

/* @var $this yii\web\View */
/* @var $model app\models\NumBank */

$this->title = 'Update Num Bank: ' . $model->numbering_id;
$this->params['breadcrumbs'][] = ['label' => 'Num Banks', 'url' => ['index']];
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