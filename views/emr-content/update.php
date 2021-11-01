<?php

/* @var $this yii\web\View */
/* @var $model app\models\EmrContent */

$this->title = 'Update Emr Content: ' . $model->notes_content_type;
$this->params['breadcrumbs'][] = ['label' => 'Emr Contents', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->notes_content_type, 'url' => ['view', 'id' => $model->notes_content_type]];
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