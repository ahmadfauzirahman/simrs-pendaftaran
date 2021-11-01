<?php

/* @var $this yii\web\View */
/* @var $model app\models\ArBpjs */

$this->title = 'Update Ar Bpjs: ' . $model->bpjs_sep_no;
$this->params['breadcrumbs'][] = ['label' => 'Ar Bpjs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->bpjs_sep_no, 'url' => ['view', 'id' => $model->bpjs_sep_no]];
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