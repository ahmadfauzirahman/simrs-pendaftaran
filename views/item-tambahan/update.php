<?php

/* @var $this yii\web\View */
/* @var $model app\models\ItemTambahan */

$this->title = 'Update Item Tambahan: ' . $model->item_name;
$this->params['breadcrumbs'][] = ['label' => 'Item Tambahans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->item_name, 'url' => ['view', 'id' => $model->item_name]];
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