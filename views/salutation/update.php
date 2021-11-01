<?php

/* @var $this yii\web\View */
/* @var $model app\models\Salutation */

$this->title = 'Update Salutation: ' . $model->salutation;
$this->params['breadcrumbs'][] = ['label' => 'Salutations', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->salutation, 'url' => ['view', 'id' => $model->salutation]];
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