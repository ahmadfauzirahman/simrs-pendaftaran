<?php

/* @var $this yii\web\View */
/* @var $model app\models\FolioVerifikatorLabXt */

$this->title = 'Update Folio Verifikator Lab Xt: ' . $model->fol_id;
$this->params['breadcrumbs'][] = ['label' => 'Folio Verifikator Lab Xts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->fol_id, 'url' => ['view', 'id' => $model->fol_id]];
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