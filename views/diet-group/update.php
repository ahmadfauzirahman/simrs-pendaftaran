<?php

/* @var $this yii\web\View */
/* @var $model app\models\DietGroup */

$this->title = 'Update Diet Group: ' . $model->diet_group_id;
$this->params['breadcrumbs'][] = ['label' => 'Diet Groups', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->diet_group_id, 'url' => ['view', 'id' => $model->diet_group_id]];
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