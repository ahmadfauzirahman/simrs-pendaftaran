<?php

/* @var $this yii\web\View */
/* @var $model app\models\RegOnlineXt */

$this->title = 'Update Reg Online Xt: ' . $model->reg_id;
$this->params['breadcrumbs'][] = ['label' => 'Reg Online Xts', 'url' => ['index']];
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