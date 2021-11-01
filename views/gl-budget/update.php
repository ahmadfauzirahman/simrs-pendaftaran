<?php

/* @var $this yii\web\View */
/* @var $model app\models\GlBudget */

$this->title = 'Update Gl Budget: ' . $model->account_id;
$this->params['breadcrumbs'][] = ['label' => 'Gl Budgets', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->account_id, 'url' => ['view', 'account_id' => $model->account_id, 'location_id' => $model->location_id, 'gl_year' => $model->gl_year]];
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