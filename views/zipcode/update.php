<?php

/* @var $this yii\web\View */
/* @var $model app\models\Zipcode */

$this->title = 'Update Zipcode: ' . $model->zipcode_id;
$this->params['breadcrumbs'][] = ['label' => 'Zipcodes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->zipcode_id, 'url' => ['view', 'id' => $model->zipcode_id]];
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