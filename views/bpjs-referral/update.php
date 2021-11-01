<?php

/* @var $this yii\web\View */
/* @var $model app\models\BpjsReferral */

$this->title = 'Update Bpjs Referral: ' . $model->patient_id;
$this->params['breadcrumbs'][] = ['label' => 'Bpjs Referrals', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->patient_id, 'url' => ['view', 'patient_id' => $model->patient_id, 'bpjs_refer_no' => $model->bpjs_refer_no]];
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