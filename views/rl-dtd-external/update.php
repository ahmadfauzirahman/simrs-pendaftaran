<?php

/* @var $this yii\web\View */
/* @var $model app\models\RlDtdExternal */

$this->title = 'Update Rl Dtd External: ' . $model->no_urut;
$this->params['breadcrumbs'][] = ['label' => 'Rl Dtd Externals', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_urut, 'url' => ['view', 'id' => $model->no_urut]];
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