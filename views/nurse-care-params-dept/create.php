<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\NurseCareParamsDept */

$this->title = 'Create Nurse Care Params Dept';
$this->params['breadcrumbs'][] = ['label' => 'Nurse Care Params Depts', 'url' => ['index']];
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