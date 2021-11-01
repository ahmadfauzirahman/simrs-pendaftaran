<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ArPmtDet */

$this->title = 'Create Ar Pmt Det';
$this->params['breadcrumbs'][] = ['label' => 'Ar Pmt Dets', 'url' => ['index']];
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