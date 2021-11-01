<?php

/* @var $this yii\web\View */
/* @var $model app\models\TestPhp */

$this->title = 'Update Test Php: ' . $model->test_php_id;
$this->params['breadcrumbs'][] = ['label' => 'Test Phps', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->test_php_id, 'url' => ['view', 'id' => $model->test_php_id]];
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