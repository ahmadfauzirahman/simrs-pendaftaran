<?php

/* @var $this yii\web\View */
/* @var $model app\models\BpjsGetSepApproval */

$this->title = 'Update Bpjs Get Sep Approval: ' . $model->no_kartu;
$this->params['breadcrumbs'][] = ['label' => 'Bpjs Get Sep Approvals', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_kartu, 'url' => ['view', 'no_kartu' => $model->no_kartu, 'tgl_sep' => $model->tgl_sep]];
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