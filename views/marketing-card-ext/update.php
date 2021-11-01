<?php

/* @var $this yii\web\View */
/* @var $model app\models\MarketingCardExt */

$this->title = 'Update Marketing Card Ext: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Marketing Card Exts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->card_id]];
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