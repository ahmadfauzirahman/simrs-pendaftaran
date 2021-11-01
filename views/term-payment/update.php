<?php

/* @var $this yii\web\View */
/* @var $model app\models\TermPayment */

$this->title = 'Update Term Payment: ' . $model->term_payment_id;
$this->params['breadcrumbs'][] = ['label' => 'Term Payments', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->term_payment_id, 'url' => ['view', 'id' => $model->term_payment_id]];
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