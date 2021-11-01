<?php

/* @var $this yii\web\View */
/* @var $model app\models\BankJournal */

$this->title = 'Update Bank Journal: ' . $model->journal_id;
$this->params['breadcrumbs'][] = ['label' => 'Bank Journals', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->journal_id, 'url' => ['view', 'id' => $model->journal_id]];
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