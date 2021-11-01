<?php

/* @var $this yii\web\View */
/* @var $model app\models\GlJscheduleAct */

$this->title = 'Update Gl Jschedule Act: ' . $model->jschedule_id;
$this->params['breadcrumbs'][] = ['label' => 'Gl Jschedule Acts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->jschedule_id, 'url' => ['view', 'jschedule_id' => $model->jschedule_id, 'seq' => $model->seq]];
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