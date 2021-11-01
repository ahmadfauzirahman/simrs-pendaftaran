<?php

/* @var $this yii\web\View */
/* @var $model app\models\MarketingCardPatientExt */

$this->title = 'Update Marketing Card Patient Ext: ' . $model->card_id;
$this->params['breadcrumbs'][] = ['label' => 'Marketing Card Patient Exts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->card_id, 'url' => ['view', 'card_id' => $model->card_id, 'patient_id' => $model->patient_id]];
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