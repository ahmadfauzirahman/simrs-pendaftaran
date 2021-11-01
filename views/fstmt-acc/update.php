<?php

/* @var $this yii\web\View */
/* @var $model app\models\FstmtAcc */

$this->title = 'Update Fstmt Acc: ' . $model->stmt_id;
$this->params['breadcrumbs'][] = ['label' => 'Fstmt Accs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->stmt_id, 'url' => ['view', 'stmt_id' => $model->stmt_id, 'line_seq' => $model->line_seq, 'account_from' => $model->account_from]];
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