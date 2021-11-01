<?php

/* @var $this yii\web\View */
/* @var $model app\models\NItemType */

$this->title = 'Update N Item Type: ' . $model->item_type_id;
$this->params['breadcrumbs'][] = ['label' => 'N Item Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->item_type_id, 'url' => ['view', 'id' => $model->item_type_id]];
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