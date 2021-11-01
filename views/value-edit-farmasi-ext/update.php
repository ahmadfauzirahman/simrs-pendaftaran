<?php

/* @var $this yii\web\View */
/* @var $model app\models\ValueEditFarmasiExt */

$this->title = 'Update Value Edit Farmasi Ext: ' . $model->reg_id;
$this->params['breadcrumbs'][] = ['label' => 'Value Edit Farmasi Exts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->reg_id, 'url' => ['view', 'id' => $model->reg_id]];
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