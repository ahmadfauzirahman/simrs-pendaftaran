<?php

/* @var $this yii\web\View */
/* @var $model app\models\StaffGroup */

$this->title = 'Update Staff Group: ' . $model->staff_group_id;
$this->params['breadcrumbs'][] = ['label' => 'Staff Groups', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->staff_group_id, 'url' => ['view', 'id' => $model->staff_group_id]];
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