<?php

/* @var $this yii\web\View */
/* @var $model app\models\RegOpExt */

$this->title = 'Update Reg Op Ext: ' . $model->reg_op_id;
$this->params['breadcrumbs'][] = ['label' => 'Reg Op Exts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->reg_op_id, 'url' => ['view', 'id' => $model->reg_op_id]];
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