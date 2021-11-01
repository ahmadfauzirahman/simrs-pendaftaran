<?php

/* @var $this yii\web\View */
/* @var $model app\models\PatientAllergy */

$this->title = 'Update Patient Allergy: ' . $model->patient_id;
$this->params['breadcrumbs'][] = ['label' => 'Patient Allergies', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->patient_id, 'url' => ['view', 'patient_id' => $model->patient_id, 'seq' => $model->seq]];
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