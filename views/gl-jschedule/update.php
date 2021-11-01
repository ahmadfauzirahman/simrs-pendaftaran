<?php

/* @var $this yii\web\View */
/* @var $model app\models\GlJschedule */

$this->title = 'Update Gl Jschedule: ' . $model->jschedule_id;
$this->params['breadcrumbs'][] = ['label' => 'Gl Jschedules', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->jschedule_id, 'url' => ['view', 'id' => $model->jschedule_id]];
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