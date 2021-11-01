<?php

/* @var $this yii\web\View */
/* @var $model app\models\VenGroup */

$this->title = 'Update Ven Group: ' . $model->ven_group_id;
$this->params['breadcrumbs'][] = ['label' => 'Ven Groups', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ven_group_id, 'url' => ['view', 'id' => $model->ven_group_id]];
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