<?php

/* @var $this yii\web\View */
/* @var $model app\models\UnitOther */

$this->title = 'Update Unit Other: ' . $model->unit_other_id;
$this->params['breadcrumbs'][] = ['label' => 'Unit Others', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->unit_other_id, 'url' => ['view', 'id' => $model->unit_other_id]];
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