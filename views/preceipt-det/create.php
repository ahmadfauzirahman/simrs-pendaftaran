<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PreceiptDet */

$this->title = 'Create Preceipt Det';
$this->params['breadcrumbs'][] = ['label' => 'Preceipt Dets', 'url' => ['index']];
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