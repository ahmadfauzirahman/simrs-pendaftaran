<?php

/* @var $this yii\web\View */
/* @var $model app\models\EmrPatientNotesDetail */

$this->title = 'Update Emr Patient Notes Detail: ' . $model->patient_notes_id;
$this->params['breadcrumbs'][] = ['label' => 'Emr Patient Notes Details', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->patient_notes_id, 'url' => ['view', 'patient_notes_id' => $model->patient_notes_id, 'notes_seq' => $model->notes_seq]];
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