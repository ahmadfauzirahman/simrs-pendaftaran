<?php

/* @var $this yii\web\View */
/* @var $model app\models\EmrNotes */

$this->title = 'Update Emr Notes: ' . $model->notes_id;
$this->params['breadcrumbs'][] = ['label' => 'Emr Notes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->notes_id, 'url' => ['view', 'id' => $model->notes_id]];
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