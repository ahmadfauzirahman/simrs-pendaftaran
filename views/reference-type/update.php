<?php

/* @var $this yii\web\View */
/* @var $model app\models\ReferenceType */

$this->title = 'Update Reference Type: ' . $model->ref_type_id;
$this->params['breadcrumbs'][] = ['label' => 'Reference Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ref_type_id, 'url' => ['view', 'id' => $model->ref_type_id]];
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