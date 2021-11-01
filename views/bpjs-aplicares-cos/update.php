<?php

/* @var $this yii\web\View */
/* @var $model app\models\BpjsAplicaresCos */

$this->title = 'Update Bpjs Aplicares Cos: ' . $model->kodekelas;
$this->params['breadcrumbs'][] = ['label' => 'Bpjs Aplicares Cos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kodekelas, 'url' => ['view', 'id' => $model->kodekelas]];
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