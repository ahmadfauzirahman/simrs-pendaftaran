<?php

/* @var $this yii\web\View */
/* @var $model app\models\DosageEn */

$this->title = 'Update Dosage En: ' . $model->dosage;
$this->params['breadcrumbs'][] = ['label' => 'Dosage Ens', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->dosage, 'url' => ['view', 'id' => $model->dosage]];
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