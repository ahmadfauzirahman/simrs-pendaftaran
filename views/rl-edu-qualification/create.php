<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\RlEduQualification */

$this->title = 'Create Rl Edu Qualification';
$this->params['breadcrumbs'][] = ['label' => 'Rl Edu Qualifications', 'url' => ['index']];
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