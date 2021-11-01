<?php

/* @var $this yii\web\View */
/* @var $model app\models\RegDiagExt */

$this->title = 'Update Reg Diag Ext: ' . $model->reg_id;
$this->params['breadcrumbs'][] = ['label' => 'Reg Diag Exts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->reg_id, 'url' => ['view', 'reg_id' => $model->reg_id, 'seq' => $model->seq]];
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