<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\BpjsKondisiPulang */

$this->title = 'Create Bpjs Kondisi Pulang';
$this->params['breadcrumbs'][] = ['label' => 'Bpjs Kondisi Pulangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
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